<?php

class MissionModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT id, name, type
        FROM misions;");

        try {
            $query->execute();
            $missions = $query->fetchAll();
            return $missions;
        } catch (PDOException $e) {
            return [];
        }
    }

    function getById($id)
    {
        $query = $this->db->connect()->prepare("SELECT id, name, type
        FROM missions
        WHERE id = $id;");

        try {
            $query->execute();
            $mission = $query->fetch();
            return $mission;
        } catch (PDOException $e) {
            return [];
        }
    }
}