<?php
namespace valarep\classes;

class hero extends Business
{

    private $id;
    public function get_id(){return $this->id; }
    public function set_id($value){ $this->id = $value; }

    private $img_src;
    public function get_img_src(){return $this->img_src; }
    public function set_img_src($value){ $this->img_src = $value; }

    private $title;
    public function get_title(){return $this->title; }
    public function set_title($value){ $this->title = $value; }

    private $text;
    public function get_text(){return $this->text; }
    public function set_text($value){ $this->text = $value; }

    private $btn_label;
    public function get_btn_label(){return $this->btn_label; }
    public function set_btn_label($value){ $this->btn_label = $value; }

    private $a_href;
    public function get_a_href(){return $this->a_href; }
    public function set_a_href($value){ $this->a_href = $value; }

    public function jsonSerialize()
    {
        return get_object_vars($this);
        
    }
}