<?php


namespace App\Http\Services\Factory;


abstract class Repository
{

    public function getOne($param)
    {
        return $this->serviceOne->getOne($param);
    }

    //    All
    public function getAll()
    {
        return $this->serviceAll->getAll();
    }

    public function getAllHm()
    {
        return $this->serviceAllHm->getAllHm();
    }

    public function getAllHmCount()
    {
        return $this->serviceAllHmCount->getAllHmCount();
    }

    public function getAllHmHm()
    {
        return $this->serviceAllHmHm->getAllHmHm();
    }

    public function getAllHmHmCount()
    {
        return $this->serviceAllHmHmCount->getAllHmHmCount();
    }


//    Where
    public function getWh($param)
    {
        return $this->serviceWh->getWh($param);
    }

    public function getWhHm($param)
    {
        return $this->serviceWhHm->getWhHm($param);
    }

    public function getWhHmCount($param)
    {
//        подчёркнуто
        return $this->serviceWhHmCount->getWhHmCount($param);
    }

    public function getWhHmHm($param)
    {
        return $this->serviceWhHmHm->getWhHmHm($param);
    }

    public function getWhHmHmCount($param)
    {
        return $this->serviceWhHmHmCount->getWhHmHmCount($param);
    }


//    Chenge
    public function create($data)
    {
        return $this->serviceCreate->create($data);
    }

    public function update($id, $data)
    {
        return $this->serviceUpdate->update($id, $data);
    }

    public function delete($id)
    {
        return $this->serviceDelete->delete($id);
    }
}
