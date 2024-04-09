<?php

declare(strict_types=1);

namespace App\Doctrine\ORM\Entity;

use ApiSkeletons\Doctrine\ORM\GraphQL\Attribute as GraphQL;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Artist
 */
#[GraphQL\Entity(typeName: 'artist', description: 'Artists')]
class Artist
{
    #[GraphQL\Field(description: 'Artist name')]
    private string $name;

    #[GraphQL\Field(description: 'Primary key')]
    private int $id;

    /** @var Collection<id, Performance> */
    #[GraphQL\Association(description: 'Performances')]
    private Collection $performances;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->performances = new ArrayCollection();
    }

    /**
     * Set name.
     */
    public function setName(string $name): Artist
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Add performance.
     */
    public function addPerformance(Performance $performance): Artist
    {
        $this->performances[] = $performance;

        return $this;
    }

    /**
     * Remove performance.
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePerformance(Performance $performance): bool
    {
        return $this->performances->removeElement($performance);
    }

    /**
     * Get performances.
     *
     * @return Collection<id, Performance>
     */
    public function getPerformances(): Collection
    {
        return $this->performances;
    }
}