<?php

class Des{
    //ATTRIBUTS
    private int $nbrface;
    private int $score;

    public function __construct(int $newNbrface, int $newScore){
        $this->nbrface = $newNbrface;
        $this->score = $newScore;
    }

    
   

    /**
     * Get the value of nbrface
     *
     * @return int
     */
    public function getNbrface(): int {
        return $this->nbrface;
    }

    /**
     * Set the value of nbrface
     *
     * @param int $nbrface
     *
     * @return self
     */
    public function setNbrface(int $nbrface): self {
        $this->nbrface = $nbrface;
        return $this;
    }

    /**
     * Get the value of score
     *
     * @return int
     */
    public function getScore(): int {
        return $this->score;
    }

    /**
     * Set the value of score
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score): self {
        $this->score = $score;
        return $this;
    }

    public function lancer(){
        return random_int(1,$this->nbrface);
    }
}