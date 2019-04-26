<?php
    // Manga class
    class Manga {
        public function __construct($name, $own, $cha, $vol, $mid,$view, $status) {
            $this->name=$name;
            $this->own = $own;
            $this->cha = $cha;
            $this->vol = $vol;
            $this->mid = $mid;
            $this->view = $view;
            $this->status = $status;
        }

        // Get entrys in form of a table
        public function get_entry() {
            if($this->view == 1){
                //OWN
                return "<tr><td>" . $this->name . "</td><td>" . '<span id="own_' . $this->mid . '">' . $this->own . '</span>' . '<br><input type="button" name="btn_inc_own" onclick="increase_own(' . $this->mid . ')" value="+"><input type="button" name="btn_dec_own" onclick="decrease_own(' . $this->mid . ')" value="-"></td><td></td><td>' . '<span id="vol_' . $this->mid . '">' . $this->vol . '</span>' . '<br><input type="button" name="btn_inc_vol" onclick="increase_vol('.$this->mid.')" value="+"><input type="button" onclick="decrease_vol(' . $this->mid . ')" name="btn_dec_vol" value="-"></td><td><input type="button" onclick="remove(' . $this->mid . ')" name="btn_rem" style="width:auto;" value="Remove"></td></tr>';
            } else {
                //ONLINE
                return "<tr><td>" . $this->name . "</td><td></td><td>" . '<span id="cha_' . $this->mid . '">' . $this->cha . '</span>' . '<br><input type="button" name="btn_inc_cha" onclick="increase_cha(' . $this->mid . ')" value="+"><input type="button"  name="btn_dec_cha" onclick="decrease_cha(' . $this->mid . ')" value="-"></td><td>' . '<span id="vol_' . $this->mid . '">' . $this->vol . '</span>' . '<br><input type="button" name="btn_inc_vol" onclick="increase_vol('.$this->mid.')" value="+"><input type="button" onclick="decrease_vol(' . $this->mid . ')" name="btn_dec_vol" value="-"></td><td><input type="button" onclick="remove(' . $this->mid . ')" name="btn_rem" style="width:auto;" value="Remove"></td></tr>';
            }
        }
    }
?>