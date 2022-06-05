<?php
class Task {
    private string $description;
    private DateTime $dateCreated;
    private array $dateUpdated;
    private DateTime $dateDone;
    private ?int $priority;
    private bool $isDone = false;
    private User $user;
    private array $comments;

    public function __construct(User $user, $description, $priority)
    {
        $this-> user = $user;
        $this-> description = $description;
        $this-> priority = $priority;
        $this-> dateCreated = new DateTime();
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this-> description = $description;
        $this-> dateUpdated[] = (new DateTime());
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): void
    {
        $this->priority = $priority;
    }

    public function isDone(): bool
    {
        return $this->isDone;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setComments($comment): void
    {
        $this->comments[] = $comment;
    }



    public function markAsDone(): void
    {
        $this->isDone = true;
        $this-> dateUpdated[] = (new DateTime());
        $this-> dateDone = new DateTime();
    }

}
