<?php 
 function principal(){
     $consultam = conexion::base()->prepare("SELECT src_maqui as imagenm FROM producto WHERE tipo='maquillaje' order by RAND() limit 1");
     $consultam->execute();
     $imm= $consultam->fetch();
     $consultaf = conexion::base()->prepare("SELECT src_figu as imagenf FROM producto where tipo='figuras' order by RAND() limit 1");
     $consultaf->execute();
     $imf= $consultaf->fetch();
     $consultama = conexion::base()->prepare("SELECT src_manga as imagenma FROM producto where tipo='mangas' order by RAND() limit 1");
     $consultama->execute();
     $imma= $consultama->fetch();
     $consultat = conexion::base()->prepare("SELECT src_tec as imagent FROM  producto where tipo='tecnologia' order by RAND() limit 1");
     $consultat->execute();
     $imt= $consultat->fetch();
     $consultad = conexion::base()->prepare("SELECT src_deportes as imagend FROM producto where tipo='deportes' order by RAND() limit 1");
     $consultad->execute();
     $imd= $consultad->fetch();
     echo "<a href='lista.php?tipo=maqui'><img src='".$imm["imagenm"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href='lista.php?tipo=figu'><img src='".$imf["imagenf"]."'></a><br><br><br><br><br><br><br>
           <a href='lista.php?tipo=manga'><img src='".$imma["imagenma"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href='lista.php?tipo=tecno'><img src='".$imt["imagent"]."'></a><br><br><br><br><br><br><br>
           <a href='lista.php?tipo=depor'><img src='".$imd["imagend"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <button class='maqui'>&nbsp;&nbsp;<strong>Maquillaje</strong>&nbsp;&nbsp;</button>
           <button class='figu'>&nbsp;&nbsp;<strong>Figuras</strong>&nbsp;&nbsp;</button>
           <button class='manga'>&nbsp;&nbsp;<strong>Mangas</strong>&nbsp;&nbsp;</button>
           <button class='tecno'>&nbsp;&nbsp;<strong>Tecnologia</strong>&nbsp;&nbsp;</button>
           <button class='deportes'>&nbsp;&nbsp;<strong>Deportes</strong>&nbsp;&nbsp;</button>";
 }
 function principalusu(){
    $consultam = conexion::base()->prepare("SELECT src_maqui as imagenm FROM producto WHERE tipo='maquillaje' order by RAND() limit 1");
    $consultam->execute();
    $imm= $consultam->fetch();
    $consultaf = conexion::base()->prepare("SELECT src_figu as imagenf FROM producto where tipo='figuras' order by RAND() limit 1");
    $consultaf->execute();
    $imf= $consultaf->fetch();
    $consultama = conexion::base()->prepare("SELECT src_manga as imagenma FROM producto where tipo='mangas' order by RAND() limit 1");
    $consultama->execute();
    $imma= $consultama->fetch();
    $consultat = conexion::base()->prepare("SELECT src_tec as imagent FROM  producto where tipo='tecnologia' order by RAND() limit 1");
    $consultat->execute();
    $imt= $consultat->fetch();
    $consultad = conexion::base()->prepare("SELECT src_deportes as imagend FROM producto where tipo='deportes' order by RAND() limit 1");
    $consultad->execute();
    $imd= $consultad->fetch();
    echo "<a href='listausu.php?tipo=maqui'><img src='".$imm["imagenm"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href='listausu.php?tipo=figu'><img src='".$imf["imagenf"]."'></a><br><br><br><br><br><br><br>
          <a href='listausu.php?tipo=manga'><img src='".$imma["imagenma"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href='listausu.php?tipo=tecno'><img src='".$imt["imagent"]."'></a><br><br><br><br><br><br><br>
          <a href='listausu.php?tipo=depor'><img src='".$imd["imagend"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button class='maqui'>&nbsp;&nbsp;<strong>Maquillaje</strong>&nbsp;&nbsp;</button>
          <button class='figu'>&nbsp;&nbsp;<strong>Figuras</strong>&nbsp;&nbsp;</button>
          <button class='manga'>&nbsp;&nbsp;<strong>Mangas</strong>&nbsp;&nbsp;</button>
          <button class='tecno'>&nbsp;&nbsp;<strong>Tecnologia</strong>&nbsp;&nbsp;</button>
          <button class='deportes'>&nbsp;&nbsp;<strong>Deportes</strong>&nbsp;&nbsp;</button>";
}
function lista(){
    $tipo = $_GET["tipo"];
    if($tipo == "maqui"){
        echo maquillaje();
    }
    else if($tipo == "figu"){
        echo figuras();
    }
    else if($tipo == "manga"){
        echo mangas();
    }
    else if($tipo == "tecno"){
        echo tecnologia();
    }
    else if($tipo == "depor"){
        echo deportes();
    }
}
 function anuncio(){
     $anuncio = conexion::base()->prepare("SELECT * FROM anuncios order by RAND() limit 1");
     $anuncio->execute();
     $anuncioi = $anuncio->fetch();
     if(isset($anuncioi["src_anuncio"])){
         echo "<a class='anuncio' href='".$anuncioi["direccion_anuncio"]."'><img src='".$anuncioi["src_anuncio"]."'></a>";
     }
    }
    function maquillaje(){
        $consulta = conexion::base()->prepare("SELECT id_maquillaje as id,count(id_maquillaje) as ult FROM producto order by id_maquillaje");
        $consulta->execute();
        $im = $consulta->fetch();
        for($im["id"] = 1; $im["id"] <= $im["ult"]; $im["id"]++){
            $n1 = $im["id"];
            $n2 = $im["id"] + 1;
            $con1 = conexion::base()->prepare("SELECT * FROM producto WHERE id_maquillaje='$n1'");
            $con1->execute();
            $i1 = $con1->fetch();
            $con2 = conexion::base()->prepare("SELECT * FROM producto WHERE id_maquillaje='$n2'");
            $con2->execute();
            $i2 = $con2->fetch();
            if(isset($_SESSION["nombre"])){
            if(isset($i1["src_maqui"])){ 
                $id = $i1["id_maquillaje"];
                $idt = $i1["id"];
                $pre= $i1["precio"];
                echo "<div style='position: relative;'><div style='position: relative; left: -10px;'><table style='width: 440px;'><tr><th><a href='productous.php?pre=$pre&idt=$idt' class='ipri'><img src='".$i1["src_maqui"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </th></tr><tr><th><br><button class='ma' align='center'>&nbsp;&nbsp;<strong>".$i1["nombre_maqui"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div>";}
            if(isset($i2["src_maqui"])){
                $id = $i2["id_maquillaje"];
                $idt = $i2["id"];
                $pre= $i2["precio"];
                 echo "<div style='position: absolute; left: 570px; top: -40px;'><table style='width: 450px;'><tr><th><a href='productous.php?pre=$pre&idt=$idt'><img src='".$i2["src_maqui"]."'></a></th></tr><br><br>
                </th></tr><tr><th><br><button class='fi' align='center'>&nbsp;&nbsp;<strong>".$i2["nombre_maqui"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div></div><br><br>";}
            $im["id"]++;
        }
        else{
            if(isset($i1["src_maqui"])){ 
                $id = $i1["id_maquillaje"];
                $idt = $i1["id"];
                $pre= $i1["precio"];
                echo "<div style='position: relative;'><div style='position: relative; left: -10px;'><table style='width: 440px;'><tr><th><a href='producto.php?pre=$pre&idt=$idt' class='ipri'><img src='".$i1["src_maqui"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </th></tr><tr><th><br><button class='ma' align='center'>&nbsp;&nbsp;<strong>".$i1["nombre_maqui"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div>";}
            if(isset($i2["src_maqui"])){ 
                $id = $i2["id_maquillaje"];
                $idt = $i2["id"];
                $pre= $i2["precio"];
                echo "<div style='position: absolute; left: 570px; top: -40px;'><table style='width: 450px;'><tr><th><a href='producto.php?pre=$pre&idt=$idt'><img src='".$i2["src_maqui"]."'></a></th></tr><br><br>
                </th></tr><tr><th><br><button class='fi' align='center'>&nbsp;&nbsp;<strong>".$i2["nombre_maqui"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div></div><br><br>";}
            $im["id"]++;
        }
    }
    }
    function figuras(){
        $consulta = conexion::base()->prepare("SELECT id_figu as id,count(id_figu) as ult FROM producto order by id_figu");
        $consulta->execute();
        $im = $consulta->fetch();
        for($im["id"] = 1; $im["id"] <= $im["ult"]; $im["id"]++){
            $n1 = $im["id"];
            $n2 = $im["id"] + 1;
            $con1 = conexion::base()->prepare("SELECT * FROM producto WHERE id_figu='$n1'");
            $con1->execute();
            $i1 = $con1->fetch();
            $con2 = conexion::base()->prepare("SELECT * FROM producto WHERE id_figu='$n2'");
            $con2->execute();
            $i2 = $con2->fetch();
            if(isset($_SESSION["nombre"])){
        if(isset($i1["src_figu"])){
            $id = $i1["id_figu"];
            $idt = $i1["id"];
            $pre= $i1["precio"];
             echo "<div style='position: relative;'><div style='position: relative; left: -10px;'><table style='width: 440px;'><tr><th><a href='productous.php?pre=$pre&idt=$idt' class='ipri'><img src='".$i1["src_figu"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </th></tr><tr><th><br><button class='ma' align='center'>&nbsp;&nbsp;<strong>".$i1["nombre_figu"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div>";
        }
        if(isset($i2["src_figu"])){
            $id = $i2["id_figu"];
            $idt = $i2["id"];
            $pre= $i2["precio"];
             echo "<div style='position: absolute; left: 570px; top: -40px;'><table style='width: 450px;'><tr><th><a href='productous.php?pre=$pre&idt=$idt'><img src='".$i2["src_figu"]."'></a></th></tr><br><br>
            </th></tr><tr><th><br><button class='fi' align='center'>&nbsp;&nbsp;<strong>".$i2["nombre_figu"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div></div><br><br><br><br>";
        }
        $im["id"]++;
            }
            else{
                if(isset($i1["src_figu"])){ 
                    $id = $i1["id_figu"];
                    $idt = $i1["id"];
                    $pre= $i1["precio"];
                    echo "<div style='position: relative;'><div style='position: relative; left: -10px;'><table style='width: 440px;'><tr><th><a href='producto.php?pre=$pre&idt=$idt' class='ipri'><img src='".$i1["src_figu"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </th></tr><tr><th><br><button class='ma' align='center'>&nbsp;&nbsp;<strong>".$i1["nombre_figu"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div>";
                }
                if(isset($i2["src_figu"])){
                    $id = $i2["id_figu"]; 
                    $idt = $i2["id"];
                    $pre= $i2["precio"];
                    echo "<div style='position: absolute; left: 570px; top: -40px;'><table style='width: 450px;'><tr><th><a href='producto.php?pre=$pre&idt=$idt'><img src='".$i2["src_figu"]."'></a></th></tr><br><br>
                    </th></tr><tr><th><br><button class='fi' align='center'>&nbsp;&nbsp;<strong>".$i2["nombre_figu"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div></div><br><br><br><br>";
                }
                $im["id"]++;
            }
    }
    }
    function mangas(){
        $consulta = conexion::base()->prepare("SELECT id_man as id,count(id_man) as ult FROM producto order by id_man");
        $consulta->execute();
        $im = $consulta->fetch();
        for($im["id"] = 1; $im["id"] <= $im["ult"]; $im["id"]++){
            $n1 = $im["id"];
            $n2 = $im["id"] + 1;
            $con1 = conexion::base()->prepare("SELECT * FROM producto WHERE id_man='$n1'");
            $con1->execute();
            $i1 = $con1->fetch();
            $con2 = conexion::base()->prepare("SELECT * FROM producto WHERE id_man='$n2'");
            $con2->execute();
            $i2 = $con2->fetch();
            if(isset($_SESSION["nombre"])){
        if(isset($i1["src_manga"])){ 
            $id = $i1["id_man"];
            $idt = $i1["id"];
            $pre= $i1["precio"];
            echo "<div style='position: relative;'><div style='position: relative; left: -10px;'><table style='width: 440px;'><tr><th><a href='productous.php?pre=$pre&idt=$idt' class='ipri'><img src='".$i1["src_manga"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </th></tr><tr><th><br><button class='ma' align='center'>&nbsp;&nbsp;<strong>".$i1["nombre_manga"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div>";}
        if(isset($i2["src_manga"])){ 
            $id = $i2["id_man"];
            $idt = $i2["id"];
            $pre= $i2["precio"];
            echo "<div style='position: absolute; left: 570px; top: -40px;'><table style='width: 450px;'><tr><th><a href='productous.php?pre=$pre&idt=$idt'><img src='".$i2["src_manga"]."'></a></th></tr><br><br>
            </th></tr><tr><th><br><button class='fi' align='center'>&nbsp;&nbsp;<strong>".$i2["nombre_manga"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div></div><br><br><br><br>";}
        $im["id"]++;
    }
    else{
        if(isset($i1["src_manga"])){ 
            $id = $i1["id_man"];
            $idt = $i1["id"];
            $pre= $i1["precio"]; 
            echo "<div style='position: relative;'><div style='position: relative; left: -10px;'><table style='width: 440px;'><tr><th><a href='producto.php?pre=$pre&idt=$idt' class='ipri'><img src='".$i1["src_manga"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </th></tr><tr><th><br><button class='ma' align='center'>&nbsp;&nbsp;<strong>".$i1["nombre_manga"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div>";}
        if(isset($i2["src_manga"])){ 
            $id = $i2["id_man"];
            $idt = $i2["id"];
            $pre= $i2["precio"];
            echo "<div style='position: absolute; left: 570px; top: -40px;'><table style='width: 450px;'><tr><th><a href='producto.php?pre=$pre&idt=$idt'><img src='".$i2["src_manga"]."'></a></th></tr><br><br>
            </th></tr><tr><th><br><button class='fi' align='center'>&nbsp;&nbsp;<strong>".$i2["nombre_manga"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div></div><br><br><br><br>";}
        $im["id"]++;
    }
    }
}
    function tecnologia(){
        $consulta = conexion::base()->prepare("SELECT id_tec as id,count(id_tec) as ult FROM producto order by id_tec");
        $consulta->execute();
        $im = $consulta->fetch();
        for($im["id"] = 1; $im["id"] <= $im["ult"]; $im["id"]++){
            $n1 = $im["id"];
            $n2 = $im["id"] + 1;
            $con1 = conexion::base()->prepare("SELECT * FROM producto WHERE id_tec='$n1'");
            $con1->execute();
            $i1 = $con1->fetch();
            $con2 = conexion::base()->prepare("SELECT * FROM producto WHERE id_tec='$n2'");
            $con2->execute();
            $i2 = $con2->fetch();
            if(isset($_SESSION["nombre"])){
        if(isset($i1["src_tec"])){ 
            $id = $i1["id_tec"];
            $idt = $i1["id"]; 
            $pre= $i1["precio"];
            echo "<div style='position: relative;'><div style='position: relative; left: -10px;'><table style='width: 440px;'><tr><th><a href='productous.php?pre=$pre&idt=$idt' class='ipri'><img src='".$i1["src_tec"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </th></tr><tr><th><br><button class='ma' align='center'>&nbsp;&nbsp;<strong>".$i1["nombre_tec"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div>";}
        if(isset($i2["src_tec"])){ 
            $id = $i2["id_tec"];
            $idt = $i2["id"]; 
            $pre= $i2["precio"];
            echo "<div style='position: absolute; left: 570px; top: -40px;'><table style='width: 450px;'><tr><th><a href='productous.php?pre=$pre&idt=$idt'><img src='".$i2["src_tec"]."'></a></th></tr><br><br>
            </th></tr><tr><th><br><button class='fi' align='center'>&nbsp;&nbsp;<strong>".$i2["nombre_tec"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div></div><br><br><br><br>";}
        $im["id"]++;
    }
    else{
        if(isset($i1["src_tec"])){ 
            $id = $i1["id_tec"];
            $idt = $i1["id"]; 
            $pre= $i1["precio"];
            echo "<div style='position: relative;'><div style='position: relative; left: -10px;'><table style='width: 440px;'><tr><th><a href='producto.php?pre=$pre&idt=$idt' class='ipri'><img src='".$i1["src_tec"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </th></tr><tr><th><br><button class='ma' align='center'>&nbsp;&nbsp;<strong>".$i1["nombre_tec"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div>";}
        if(isset($i2["src_tec"])){ 
            $id = $i2["id_tec"];
            $idt = $i2["id"]; 
            $pre= $i2["precio"];
            echo "<div style='position: absolute; left: 570px; top: -40px;'><table style='width: 450px;'><tr><th><a href='producto.php?pre=$pre&idt=$idt'><img src='".$i2["src_tec"]."'></a></th></tr><br><br>
            </th></tr><tr><th><br><button class='fi' align='center'>&nbsp;&nbsp;<strong>".$i2["nombre_tec"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div></div><br><br><br><br>";}
        $im["id"]++;
    }
}
    }
    function deportes(){
        $consulta = conexion::base()->prepare("SELECT id_deportes as id,count(id_deportes) as ult FROM producto order by id_deportes");
        $consulta->execute();
        $im = $consulta->fetch();
        for($im["id"] = 1; $im["id"] <= $im["ult"]; $im["id"]++){
            $n1 = $im["id"];
            $n2 = $im["id"] + 1;
            $con1 = conexion::base()->prepare("SELECT * FROM producto WHERE id_deportes='$n1'");
            $con1->execute();
            $i1 = $con1->fetch();
            $con2 = conexion::base()->prepare("SELECT * FROM producto WHERE id_deportes='$n2'");
            $con2->execute();
            $i2 = $con2->fetch();
            if(isset($_SESSION["nombre"])){
            if(isset($i1["src_deportes"])){ 
                $id = $i1["id_deportes"];
                $idt = $i1["id"];
                $pre= $i1["precio"]; 
                echo "<div style='position: relative;'><div style='position: relative; left: -10px;'><table style='width: 440px;'><tr><th><a href='productous.php?pre=$pre&idt=$idt' class='ipri'><img src='".$i1["src_deportes"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </th></tr><tr><th><br><button class='ma' align='center'>&nbsp;&nbsp;<strong>".$i1["nombre_deportes"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div>";}
            if(isset($i2["src_deportes"])){ 
                $id = $i2["id_deportes"];
                $idt = $i2["id"];
                $pre= $i2["precio"]; 
                echo "<div style='position: absolute; left: 570px; top: -40px;'><table style='width: 450px;'><tr><th><a href='productous.php?pre=$pre&idt=$idt'><img src='".$i2["src_deportes"]."'></a></th></tr><br><br>
                </th></tr><tr><th><br><button class='fi' align='center'>&nbsp;&nbsp;<strong>".$i2["nombre_deportes"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div></div><br><br><br><br>";}
            $im["id"]++;
        }
        else{
            if(isset($i1["src_deportes"])){ 
                $id = $i1["id_deportes"];
                $idt = $i1["id"];
                $pre= $i1["precio"];  
                echo "<div style='position: relative;'><div style='position: relative; left: -10px;'><table style='width: 440px;'><tr><th><a href='producto.php?pre=$pre&idt=$idt' class='ipri'><img src='".$i1["src_deportes"]."'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </th></tr><tr><th><br><button class='ma' align='center'>&nbsp;&nbsp;<strong>".$i1["nombre_deportes"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div>";}
            if(isset($i2["src_deportes"])){ 
                $id = $i2["id_deportes"];
                $idt = $i2["id"]; 
                $pre= $i2["precio"]; 
                echo "<div style='position: absolute; left: 570px; top: -40px;'><table style='width: 450px;'><tr><th><a href='producto.php?pre=$pre&idt=$idt'><img src='".$i2["src_deportes"]."'></a></th></tr><br><br>
                </th></tr><tr><th><br><button class='fi' align='center'>&nbsp;&nbsp;<strong>".$i2["nombre_deportes"]."</strong>&nbsp;&nbsp;</button></th></tr></table></div></div><br><br><br><br>";}
            $im["id"]++;
        }
    }
}
function producto(){
    $id = $_GET["idt"];
    $pro = conexion::base()->prepare("SELECT * FROM producto WHERE id='$id'");
    $pro->execute();
    $info = $pro->fetch();
    echo "<img style='position: relative; left: 230px; width: 500px; height: 400px;' src='".$info["src"]."'><br><br><br>";
    echo "<span style='position: relative; left: -120px; color: rgb(211, 211, 211); font-size: 25px;'><i>
    <font color='red'><i>".$info["nombre"]."</i></font><br><br><font color='#358ea0'><strong>Precio: </strong></font><strong>".$info["precio"]."</strong><br><br>
    ".$info["descripcion"]."
    <br><br><br><br><br><br><br><br><br><br></i></span>";
}
function procarro(){
    if(isset($_SESSION["id"])){
    $id = $_SESSION["id"];
    $consulta = conexion::base()->prepare("SELECT count(id_usu) as conta FROM usu_pro where id_usu='$id'");
    $consulta->execute();
    $contador = $consulta->fetch();
    $cambiar = conexion::base()->prepare("SELECT id_pro_usu as cambiar FROM usu_pro where id_usu='$id'");
    $cambiar->execute();
    $cambi = $cambiar->fetch();
    if($contador["conta"]>0){
    for($i=$cambi["cambiar"]; $i<=$contador["conta"]; $i++){
        $carrito = conexion::base()->prepare("SELECT * FROM usu_pro where id_usu='$id' and id_pro_usu='$i'");
        $carrito->execute();
        $carro = $carrito->fetch();
        $pro = $carro["id_produ"];
        $informacion = conexion::base()->prepare("SELECT * FROM producto where id='$pro'");
        $informacion->execute();
        $info = $informacion->fetch();
        echo "<img style='position: relative; left: 230px; width: 500px; height: 400px;' src='".$info["src"]."'><br><br><br>";
        echo "<span style='position: relative; left: 270px; color: rgb(211, 211, 211); font-size: 25px;'><i>
    <font color='red'><i>".$info["nombre"]."</i></font><br><br><font color='#358ea0'><strong>Precio: </strong></font><strong>".$info["precio"]."</strong><br><br>
    </i></span>";
    }
    $total = conexion::base()->prepare("SELECT sum(total) as total FROM usu_pro WHERE id_usu='$id'");
    $total->execute();
    $to = $total->fetch();
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <i><font color='#358ea0' style='font-size: 25px;'><strong>Total: </strong></font></i><strong style='color: rgb(211, 211, 211); font-size: 25px;'><i>".$to["total"]."</i></strong><br><br>";
  }
  else{
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class='ero'><strong>&nbsp;No tienes ningun produncto en el carrito&nbsp;</strong></button>";
  }
}
else{
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class='ero'><strong>&nbsp;Por favor inicie sesion primero&nbsp;</strong></button>";
}
if(isset($_SESSION["id"]) and $contador["conta"]>0){
    echo "<button><a href='vaciar.php'>vaciar</a></button>";
    }
}
    ?>