<?php

class Xhgui_Saver_Mongo implements Xhgui_Saver_Interface
{
    protected $_profiles;
    
    public function __construct(Xhgui_Profiles $profiles) 
    {
        $this->_profiles = $profiles;
    }
    
    public function save($data)
    {
        $dataP = [];
        foreach($data['profile'] as $k => $v){  
               $k = str_replace(".",":",$k);
               $dataP[$k] = $v;
        }
        $dataM = [];
        foreach($data['meta'] as $k => $v){  
            $k = str_replace(".",":",$k);
            $dataM[$k] = $v;
        }
        $data['profile'] = $dataP;
        $data['meta'] = $dataM;
        return $this->_profiles->insert($data);
    }
}
