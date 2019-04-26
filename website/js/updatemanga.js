function increase_vol(mid){
    $.ajax({
        url: "updatemanga-scriptV2.php?vol=1&mid=" + mid,
      });
    increase_gui(mid, "vol");
}

function increase_cha(mid){
    $.ajax({
        url: "updatemanga-scriptV2.php?cha=1&mid=" + mid,
      })
      increase_gui(mid, "cha");
}

function increase_own(mid){
    $.ajax({
        url: "updatemanga-scriptV2.php?own=1&mid=" + mid,
      })
      increase_gui(mid, "own");
}

function decrease_vol(mid){
  if(parseInt(document.getElementById("vol_" + mid).innerHTML) > 0){
    $.ajax({
        url: "updatemanga-scriptV2.php?vol=2&mid=" + mid,
      })
    decrease_gui(mid, "vol");
  }
}

function decrease_cha(mid){
  if(parseInt(document.getElementById("cha_" + mid).innerHTML) > 0){
    $.ajax({
        url: "updatemanga-scriptV2.php?cha=2&mid=" + mid,
      });
    decrease_gui(mid, "cha");
  }
}

function decrease_own(mid){
  if(parseInt(document.getElementById("own_" + mid).innerHTML) > 0){
    $.ajax({
        url: "updatemanga-scriptV2.php?own=2&mid=" + mid,
      });
      decrease_gui(mid, "own");
  }
}

function remove(mid){
    $.ajax({
        url: "updatemanga-scriptV2.php?rem=1&mid=" + mid,
      });
    location.reload(); 
}

function increase_gui(mid, type){
  var item = type + "_" + mid;
  document.getElementById(item).innerHTML = parseInt(document.getElementById(item).innerHTML) + 1;
}

function decrease_gui(mid, type){
  var item = type + "_" + mid;
  document.getElementById(item).innerHTML = parseInt(document.getElementById(item).innerHTML) - 1;
}