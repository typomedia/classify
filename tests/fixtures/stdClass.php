<?php

class stdClass
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $iid;

    /**
     * @var int
     */
    private $projectId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var string
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $closedAt;

    /**
     * @var string
     */
    private $closedBy;

    /**
     * @var array
     */
    private $labels;

    /**
     * @var Author
     */
    private $author;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $userNotesCount;

    /**
     * @var int
     */
    private $mergeRequestsCount;

    /**
     * @var int
     */
    private $upvotes;

    /**
     * @var int
     */
    private $downvotes;

    /**
     * @var string
     */
    private $dueDate;

    /**
     * @var bool
     */
    private $confidential;

    /**
     * @var string
     */
    private $discussionLocked;

    /**
     * @var string
     */
    private $issueType;

    /**
     * @var string
     */
    private $webUrl;

    /**
     * @var int
     */
    private $blockingIssuesCount;

    /**
     * @var bool
     */
    private $hasTasks;

    /**
     * @var string
     */
    private $severity;

    /**
     * @var bool
     */
    private $subscribed;

    /**
     * @var string
     */
    private $movedToId;

    /**
     * @var string
     */
    private $serviceDeskReplyTo;


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return stdClass
     */
    public function setId(?int $id): stdClass
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIid(): ?int
    {
        return $this->iid;
    }

    /**
     * @param int|null $iid
     *
     * @return stdClass
     */
    public function setIid(?int $iid): stdClass
    {
        $this->iid = $iid;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int|null $projectId
     *
     * @return stdClass
     */
    public function setProjectId(?int $projectId): stdClass
    {
        $this->projectId = $projectId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return stdClass
     */
    public function setTitle(?string $title): stdClass
    {
        $this->title = $title;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return stdClass
     */
    public function setDescription(?string $description): stdClass
    {
        $this->description = $description;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     *
     * @return stdClass
     */
    public function setState(?string $state): stdClass
    {
        $this->state = $state;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @param string|null $createdAt
     *
     * @return stdClass
     */
    public function setCreatedAt(?string $createdAt): stdClass
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @param string|null $updatedAt
     *
     * @return stdClass
     */
    public function setUpdatedAt(?string $updatedAt): stdClass
    {
        $this->updatedAt = $updatedAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getClosedAt(): ?string
    {
        return $this->closedAt;
    }

    /**
     * @param string|null $closedAt
     *
     * @return stdClass
     */
    public function setClosedAt(?string $closedAt): stdClass
    {
        $this->closedAt = $closedAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getClosedBy(): ?string
    {
        return $this->closedBy;
    }

    /**
     * @param string|null $closedBy
     *
     * @return stdClass
     */
    public function setClosedBy(?string $closedBy): stdClass
    {
        $this->closedBy = $closedBy;
        
        return $this;
    }

    /**
     * @return array|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * @param array|null $labels
     *
     * @return stdClass
     */
    public function setLabels(?array $labels): stdClass
    {
        $this->labels = $labels;
        
        return $this;
    }

    /**
     * @return Author|null
     */
    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    /**
     * @param Author|null $author
     *
     * @return stdClass
     */
    public function setAuthor(?Author $author): stdClass
    {
        $this->author = $author;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return stdClass
     */
    public function setType(?string $type): stdClass
    {
        $this->type = $type;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUserNotesCount(): ?int
    {
        return $this->userNotesCount;
    }

    /**
     * @param int|null $userNotesCount
     *
     * @return stdClass
     */
    public function setUserNotesCount(?int $userNotesCount): stdClass
    {
        $this->userNotesCount = $userNotesCount;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMergeRequestsCount(): ?int
    {
        return $this->mergeRequestsCount;
    }

    /**
     * @param int|null $mergeRequestsCount
     *
     * @return stdClass
     */
    public function setMergeRequestsCount(?int $mergeRequestsCount): stdClass
    {
        $this->mergeRequestsCount = $mergeRequestsCount;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUpvotes(): ?int
    {
        return $this->upvotes;
    }

    /**
     * @param int|null $upvotes
     *
     * @return stdClass
     */
    public function setUpvotes(?int $upvotes): stdClass
    {
        $this->upvotes = $upvotes;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDownvotes(): ?int
    {
        return $this->downvotes;
    }

    /**
     * @param int|null $downvotes
     *
     * @return stdClass
     */
    public function setDownvotes(?int $downvotes): stdClass
    {
        $this->downvotes = $downvotes;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * @param string|null $dueDate
     *
     * @return stdClass
     */
    public function setDueDate(?string $dueDate): stdClass
    {
        $this->dueDate = $dueDate;
        
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isConfidential(): ?bool
    {
        return $this->confidential;
    }

    /**
     * @param bool|null $confidential
     *
     * @return stdClass
     */
    public function setConfidential(?bool $confidential): stdClass
    {
        $this->confidential = $confidential;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDiscussionLocked(): ?string
    {
        return $this->discussionLocked;
    }

    /**
     * @param string|null $discussionLocked
     *
     * @return stdClass
     */
    public function setDiscussionLocked(?string $discussionLocked): stdClass
    {
        $this->discussionLocked = $discussionLocked;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssueType(): ?string
    {
        return $this->issueType;
    }

    /**
     * @param string|null $issueType
     *
     * @return stdClass
     */
    public function setIssueType(?string $issueType): stdClass
    {
        $this->issueType = $issueType;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    /**
     * @param string|null $webUrl
     *
     * @return stdClass
     */
    public function setWebUrl(?string $webUrl): stdClass
    {
        $this->webUrl = $webUrl;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBlockingIssuesCount(): ?int
    {
        return $this->blockingIssuesCount;
    }

    /**
     * @param int|null $blockingIssuesCount
     *
     * @return stdClass
     */
    public function setBlockingIssuesCount(?int $blockingIssuesCount): stdClass
    {
        $this->blockingIssuesCount = $blockingIssuesCount;
        
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isHasTasks(): ?bool
    {
        return $this->hasTasks;
    }

    /**
     * @param bool|null $hasTasks
     *
     * @return stdClass
     */
    public function setHasTasks(?bool $hasTasks): stdClass
    {
        $this->hasTasks = $hasTasks;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSeverity(): ?string
    {
        return $this->severity;
    }

    /**
     * @param string|null $severity
     *
     * @return stdClass
     */
    public function setSeverity(?string $severity): stdClass
    {
        $this->severity = $severity;
        
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isSubscribed(): ?bool
    {
        return $this->subscribed;
    }

    /**
     * @param bool|null $subscribed
     *
     * @return stdClass
     */
    public function setSubscribed(?bool $subscribed): stdClass
    {
        $this->subscribed = $subscribed;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMovedToId(): ?string
    {
        return $this->movedToId;
    }

    /**
     * @param string|null $movedToId
     *
     * @return stdClass
     */
    public function setMovedToId(?string $movedToId): stdClass
    {
        $this->movedToId = $movedToId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getServiceDeskReplyTo(): ?string
    {
        return $this->serviceDeskReplyTo;
    }

    /**
     * @param string|null $serviceDeskReplyTo
     *
     * @return stdClass
     */
    public function setServiceDeskReplyTo(?string $serviceDeskReplyTo): stdClass
    {
        $this->serviceDeskReplyTo = $serviceDeskReplyTo;
        
        return $this;
    }
}

