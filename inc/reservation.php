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

        public function login($companyname, $name) {
            $sql = "SELECT name FROM reservation WHERE companyname=:companyname";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':companyname', $companyname);
            $stmt->execute();
        
            if ($stmt->rowCount()) {
                $row = $stmt->fetch();
                if ($row['name'] === $name) {
                    // 회사명과 대표이름이 일치하는 경우 로그인 성공 처리 로직 작성
                    return true;
                } else {
                    // 회사명과 대표이름이 일치하지 않는 경우 로그인 실패 처리 로직 작성
                    return false;
                }
            } else {
                // 조회 결과가 없는 경우 로그인 실패 처리 로직 작성
                return false;
            }
        }
        

        public function getInfo($companyname) {
            $sql = "SELECT * FROM reservation WHERE companyname=:company_name";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":company_name", $companyname);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
        
            return $stmt->fetch();
        }

        public function edit($marr) {
            $sql = "UPDATE reservation SET companyname=:companyname, name=:name, email=:email, phone_number=:phone_number, content=:content WHERE companyname=:oldname";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':companyname', $marr['companyname']);
            $stmt->bindValue(':name', $marr['name']);
            $stmt->bindValue(':email', $marr['email']);
            $stmt->bindValue(':phone_number', $marr['phone_number']);
            $stmt->bindValue(':content', $marr['content']);
            $stmt->bindValue(':oldname', $marr['old']);
            return $stmt->execute();
        }
    }
?>