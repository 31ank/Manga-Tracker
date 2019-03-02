<?php
    class Manga {
        public function __construct($name, $own, $cha, $vol, $mid, $status) {
            $this->name=$name;
            $this->own = $own;
            $this->cha = $cha;
            $this->vol = $vol;
            $this->mid = $mid;
            $this->status = $status;
        }

        public function get_withUV() {
            return "<tr><td>" . $this->name . "</td><td>" . $this->own . '<form action="updatemanga-script.php" method="POST"><input type="hidden" name="mid" value="' . $this->mid . '"/><input type="submit" name="btn_inc_own" value="+"><input type="submit" name="btn_dec_own" value="-"></form></td><td>' . $this->cha . '<form action="updatemanga-script.php" method="POST"><input type="hidden" name="mid" value="' . $this->mid . '"/><input type="submit" name="btn_inc_cha" value="+"><input type="submit" name="btn_dec_cha" value="-"></form></td><td>' . $this->vol . '<form action="updatemanga-script.php" method="POST"><input type="hidden" name="mid" value="' . $this->mid . '"/><input type="submit" name="btn_inc_vol" value="+"><input type="submit" name="btn_dec_vol" value="-"></form></td><td><form action="updatemanga-script.php" method="POST"><input type="hidden" name="mid" value="' . $this->mid . '"/><input type="submit" name="btn_rem" style="width:auto;" value="Remove"></form></td></tr>';
        }

        public function get_withoutUV() {
            return "<tr><td>" . $this->name . "</td><td>" . $this->own . '<form action="updatemanga-script.php" method="POST"><input type="hidden" name="mid" value="' . $this->mid . '"/><input type="submit" name="btn_inc_own" value="+"><input type="submit" name="btn_dec_own" value="-"></form></td><td>' . $this->vol . '<form action="updatemanga-script.php" method="POST"><input type="hidden" name="mid" value="' . $this->mid . '"/><input type="submit" name="btn_inc_vol" value="+"><input type="submit" name="btn_dec_vol" value="-"></form></td><td><form action="updatemanga-script.php" method="POST"><input type="hidden" name="mid" value="' . $this->mid . '"/><input type="submit" name="btn_rem" value="Remove" style="width:auto;"></form></td></tr>';
        }
    }
?>