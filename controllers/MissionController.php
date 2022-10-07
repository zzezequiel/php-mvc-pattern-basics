<?php 

class MissionController
{
    use Controller;

    /* ~~~ CONTROLLER METHODS ~~~ */

    function getAllMissions()
    {
        $missions = $this->model->get();
        if (isset($missions)) {
            $this->view->data = $missions;
            $this->view->render("mission/missionDashboard");
        }
    }
}