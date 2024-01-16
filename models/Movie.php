<?php
class Movie
{
    /**
     * Variabili d'istanza
     *
     * @var mixed
     */
    public $title;
    public $type;
    public $duration;
    public $vote;

    /**
     * __construct
     *
     * @param  mixed $_title
     * @param  mixed $_type
     * @param  mixed $_duration
     * @param  mixed $_vote
     */
    function __construct(string $_title, array $_type, int $_duration,)
    {
        $this->title = $_title;
        $this->type = $_type;
        $this->duration = $_duration;
        $this->vote = $this->randomVote();
    }
    /**
     * randomVote
     *
     * @return int
     */
    function randomVote()
    {
        return rand(1, 5);
    }
}
