<?php

/**
 *
 */

require_once($_SERVER['DOCUMENT_ROOT']."/scripts/functions.php");
class gameMenager
{
  private $db = null;
  private $title = "";
  private $overlay = "";
  private $team_id = "";

  function __construct(int $id)
  {
    $db = connect_to_db();
    $stmt = $db -> query("Select * From games where id=".$id);
    $res = $stmt -> fetch(PDO::FETCH_ASSOC);
    $this->title = $res['title'];
    $this->overlay = $res['overlay'];
    $this->team_id = $res['team_id'];
  }

  public function _getTitle()
  {
    return $this->title;
  }

  public function _getOverlay()
  {
    return $this->overlay;
  }

  private function _getTeamId()
  {
    return $this->team_id;
  }
}

 ?>
