<?php

class RocketController
{
    use Controller;

    /* ~~~ CONTROLLER METHODS ~~~ */

    function getAllRockets()
    {
        $rockets = $this->model->get();
        if (isset($rockets)) {
            $this->view->data = $rockets;
            $this->view->render("rocket/rocketDashboard");
        }
    }
}


    /*

    function getRocket($request)
    {
        $rocket = null;
        if (isset($request["id"])) {
            $rocket = $this->model->getById($request["id"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $rocket;
        $this->view->render("employee/employee");
    }
}
*/