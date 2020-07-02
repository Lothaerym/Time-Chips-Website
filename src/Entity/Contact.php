<?php


namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact {
        
    /**
     * @var string|null 
     * @Assert\NotBlank()
     */
    private $name;
    
     /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;
    
     /**
     * @var string|null 
     * @Assert\NotBlank()
     */
    private $message;
    
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }  
    
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    } 
    
    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    } 
}
