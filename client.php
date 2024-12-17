<?php

class Client {
    private string $clientName;
    private string $clientSurname;

        public function __construct(string $clientName,string $clientSurname){
            $this->clientName=$clientName;
            $this->clientSurname=$clientSurname;
        }

        public function getClientName(){
            return $this->clientName;
        }

        public function setClientName($clientName){
            $this->clientName=$clientName;
        }

        public function getClientSurname(){
            return $this->clientSurname;
        }

        public function setClientSurname($clientSurname){
            $this->clientSurname=$clientSurname;
        }
}