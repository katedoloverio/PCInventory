<?php
class Alert {

 public function __construct(){
  $this->first = '<div class="alert ';
  $this->second  = '"><i class="glyphicon ';
  $this->third = '"></i> ';
  $this->last = '</div>';


 }
 
 public function success($message){
  return $this->first.'alert-success'.$this->second.'glyphicon-pencil'.$this->third.$message.$this->last ;
 }
 public function info($message){
  return $this->first.'alert-info'.$this->second.'glyphicon-info-sign'.$this->third.$message.$this->last ;
 }
 public function danger($message){
  return $this->first.'alert-danger'.$this->second.'glyphicon-remove'.$this->third.$message.$this->last ;
 }
 public function warning($message){
  return $this->first.'alert-warning'.$this->second.'glyphicon-warning-sign'.$this->third.$message.$this->last ;
 }
}