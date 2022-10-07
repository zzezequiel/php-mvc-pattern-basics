
<?php

class RocketModel extends Model
{ 
    function get()
    {
        
        $query = $this->db->connect()->prepare("SELECT * FROM rockets");
       

        try {
            $query->execute();
            $rockets = $query->fetchAll();
            return $rockets;
        } catch (PDOException $e) {
            return [];
        }
    }

    function getById($id)
    {
        $query = $this->db->connect()->prepare("SELECT id, name, last_name, email, gender_id, avatar, age, phone_number, city, street_address, state, postal_code
        FROM employees e
        WHERE id = $id;");

        try {
            $query->execute();
            $rocket = $query->fetch();
            return $rocket;
        } catch (PDOException $e) {
            return [];
        }
    }
}