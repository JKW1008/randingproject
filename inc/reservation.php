<?php
    

    class Reservation{
        // 멤버 변수, 프로퍼티
        private $conn;

        // 생성자
        public function __construct($db){
            $this->conn = $db;
        }

        // 이메일 형식체크
        public function email_format_check($email){
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }

        public function phone_number_format_check($phone_number) {
            // 휴대폰 번호 형식 정규식 패턴
            $pattern = "/^01([0|1|6|7|8|9]?)\d{3,4}\d{4}$/";
            
            return preg_match($pattern, $phone_number);
        }

        // 예약정보 입력
        public function input($marr) {
            $sql = "INSERT INTO reservation(companyname, name, email, phone_number, content, create_at)
                    VALUES (:companyname, :name, :email, :phone_number, :content, NOW())";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':companyname', $marr['companyname']);
            $stmt->bindParam(':name', $marr['name']);
            $stmt->bindParam(':email', $marr['email']);
            $stmt->bindParam(':phone_number', $marr['phone_number']);
            $stmt->bindParam(':content', $marr['content']);
            $stmt->execute();
        }

        public function getInfoFromIdx($idx) {
            $sql = "SELECT * FROM Reservation WHERE idx=:idx";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":idx", $idx);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetch();
        }

        public function edit($marr) {
            $sql = "UPDATE Reservation SET companyname=:companyname, name=:name, email=:email";
        
            $params = [
                ':companyname' => $marr['companyname'],
                ':name' => $marr['name'],
                ':email' => $marr['email'],
            ];
        
            if (isset($marr['idx']) && !empty($marr['idx'])) {
                // idx로 업데이트하는 경우
                $params[':idx'] = intval($marr['idx']);
                $sql .= " WHERE idx=:idx";
            }
            
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute($params);
        }        

        
        
    }
?>