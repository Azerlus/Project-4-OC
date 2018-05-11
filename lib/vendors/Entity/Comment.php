<?php
namespace Entity;
 
use \BlogFram\Entity;
 
class Comment extends Entity
{
  protected $chapters,
            $auteur,
            $contenu,
            $report,
            $date;
 
  const INVALID_AUTHOR = 1;
  const INVALID_CONTENT = 2;
 
  public function isValid()
  {
    return !(empty($this->auteur) || empty($this->contenu));
  }

  // SETTERS

  public function setChapters($chapter)
  {
    $this->chapter = (int) $chapter;
  }
 
  public function setAuteur($auteur)
  {
    if (!is_string($auteur) || empty($auteur))
    {
      $this->erreurs[] = self::INVALID_AUTHOR;
    }
 
    $this->auteur = $auteur;
  }
 
  public function setContenu($contenu)
  {
    if (!is_string($contenu) || empty($contenu))
    {
      $this->erreurs[] = self::INVALID_CONTENT;
    }
 
    $this->contenu = $contenu;
  }
  
  public function setReport($report)
  {
    $this->report = (int) $report;
  }

  public function setDate(\DateTime $date)
  {
    $this->date = $date;
  }

  // GETTERS
 
  public function chapters()
  {
    return $this->chapters;
  }
 
  public function auteur()
  {
    return $this->auteur;
  }
 
  public function contenu()
  {
    return $this->contenu;
  }

  public function report()
  {
    return $this->report;
  }
 
  public function date()
  {
    return $this->date;
  }
}