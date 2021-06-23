<?php  $this->view("includes/AdminDashboard",$data);?> 

<!-- Contains Frames and its functions (Add,Modify,Delete) -->

<?php    $pdo = new PDO("mysql:host=localhost;dbname=magic_eyewear","root","");  ?>

<html>
<body>


<div class="main-container">
        
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-50-p mb-30">
                <h3> Frames </h3><br>
                            <form method="post">
							<div class="btn-list">
								<a class=" btn-primary" data-toggle="modal" href="#" data-target="#AddFrame" type="button"><button id="add" class="button button1" >Add</button></a>
								<a class=" btn-primary" data-toggle="modal" href="#" data-target="#EditFrame" type="button"><button id="add" class="button button1" >Edit</button></a>
                                <a class=" btn-primary" data-toggle="modal" href="#" data-target="#confirmation-modal" type="button"><button id="add" class="button delete" >Delete</button></a>
								
							</div>
                            </form>
        
        
      <!-- Add Frame -->
			<div class="col-md-4 col-sm-12 mb-30">
							<div class="modal fade bs-example-modal-lg" id="AddFrame" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
                                        
											<h4 class="modal-title" id="myLargeModalLabel">Add Frame</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
                                        <form method="post">
                                            <div class="modal-body">
                                            <input type="text" class="form-control form-control-lg" placeholder="Code" name="code"> <br>
                                            <select class="form-control form-control-lg" name="brandname">
                                                        <option selected="">Brand Name</option>
                                                        <option value="1">ARMANI EXCHANGE</option>
                                                        <option value="2">Tommy Hilfiger</option>
                                                        <option value="2">Polaroid</option>
                                                        <option value="2">HUGO</option>
                                                        <option value="2">SEVENTH STREET</option>
                                                        <option value="2">Pierre Cardin</option>
                                                        <option value="2">RAY BAN</option>
                                                        <option value="2">Ralph Lauren</option>
                                                        <option value="2">Diva</option>
                                            </select> <br>
                                            
                                            
                                            <select class="form-control form-control-lg" name="rim">
                                                        <option selected="">Rim</option>
                                                        <option value="1">Full Rim</option>
                                                        <option value="2">Semi Rimless</option>
                                                        <option value="2">Rimless</option>
                                                        
                                            </select> <br>
                                            <input type="text" class="form-control form-control-lg" placeholder="Size" name="size"> <br>
                                            
                                            <select class="form-control form-control-lg" name="color">
                                                        <option selected="">Color</option>
                                                        <option value="1">Black</option>
                                                        <option value="2">Gray</option>
                                                        <option value="2">Red</option>
                                                        <option value="2">Blue</option>
                                                        <option value="2">White</option>
                                                        <option value="2">Transparent</option> 
                                            </select> <br>
                                            <select class="form-control form-control-lg" name="shape">
                                                        <option selected="">Shape</option>
                                                        <option value="1">Diamond</option>
                                                        <option value="2">Heart-Shaped</option>
                                                        <option value="2">Oval</option>
                                                        <option value="2">Square</option>
                                                        <option value="2">Triangular</option>
                                                        <option value="2">Round</option>
                                            </select> <br>
                                            <select class="form-control form-control-lg" name="material">
                                                        <option selected="">Material</option>
                                                        <option value="1">Polycarbonate</option>
                                                        <option value="2">Stainless Steel</option>
                                                        <option value="2">Acetate</option>
                                                        <option value="2">Metal</option>
                                                        <option value="2">Eco Polyamide</option>
                                            </select> <br>
                                            <input type="text" class="form-control form-control-lg" placeholder="Price" name="price"> <br>
                                            <select class="form-control form-control-lg" name="gender">
                                                        <option selected="">Gender</option>
                                                        <option value="1">Men</option>
                                                        <option value="2">Women</option>
                                            </select> <br>
                                            
                                            <select class="form-control form-control-lg" name="type">
                                                        <option selected="">Type</option>
                                                        <option value="1">Eyeglasses</option>
                                                        <option value="2">Sunglasses</option>
                                                        <option value="2">Sports</option>
                                            </select> <br>
                                            
                                            <h6>Add frame image</h6>
                                            <input type="file" class="form-control form-control-lg"  id="img" name="image" accept="image/*">  <br>

                                            <input type="text" class="form-control form-control-lg" placeholder="Description" name="desc"> <br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="button delete" data-dismiss="modal">Close</button>
                                                <input type="submit" class="button save" value="Save changes" name="submitAddFrame">  <!-- To be edited with the form -->
                                        </form>
										</div>
									</div>
								</div>
							</div>
                            <?php 
                                    // Insert User
                                    if(isset($_POST["submitAddFrame"])){
                                        $code = $_POST["code"];
                                        $brandname = $_POST["brandname"];
                                        $rim = $_POST["rim"];
                                        $size= $_POST["size"];
                                        $color = $_POST["color"];
                                        $shape = $_POST["shape"];
                                        $material = $_POST["material"];
                                        $price = $_POST["price"];
                                        $gender = $_POST["gender"];
                                        $type =$_POST["type"];
                                        $img = $_POST["image"];
                                        $desc =$_POST["desc"];
                                        
                                        $sql = "INSERT into frame(FrameCode,FrameType,FrameBrand,FrameDescription,FrameColor,
                                        FrameRim,FrimMaterial,AssignedGender,FrameSize,FrameImage,FrameShape,FramePrice)
                                        VALUES(:fc,:ft,:fb,:fd,:fcl,:fr,:fm,:fg,:fs,:fi,:fsh,:fp)";
                                        $data = [
                                            'fc' => $code,
                                            'ft' => $type,
                                            'fb' => $brandname,
                                            'fd' =>$desc,
                                            'fcl' => $color,
                                            'fr' => $rim,
                                            'fm' => $material,
                                            'fg' => $gender,
                                            'fs' => $size,
                                            'fi' => $img,
                                            'fsh' => $shape,
                                            'fp' => $price,
                                        ];
                                        $r = $pdo->prepare($sql);
                                        $r ->execute($data);
                                    }
                                ?>
            </div>

                             
                            
        <!-- Edit Modal -->
                    <div class="modal fade bs-example-modal-lg" id="EditFrame" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                
                                    <h4 class="modal-title" id="myLargeModalLabel">Edit Frame</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form method="post">
                                    <div class="modal-body">
                                    <input type="text" class="form-control form-control-lg" placeholder="FrameID" name="id"> <br>
                                    <input type="text" class="form-control form-control-lg" placeholder="Code" name="code"> <br>
                                    <select class="form-control form-control-lg" name="brandname">
                                                        <option selected="">Brand Name</option>
                                                        <option value="1">ARMANI EXCHANGE</option>
                                                        <option value="2">Tommy Hilfiger</option>
                                                        <option value="2">Polaroid</option>
                                                        <option value="2">HUGO</option>
                                                        <option value="2">SEVENTH STREET</option>
                                                        <option value="2">Pierre Cardin</option>
                                                        <option value="2">RAY BAN</option>
                                                        <option value="2">Ralph Lauren</option>
                                                        <option value="2">Diva</option>
                                            </select> <br>
                                            <select class="form-control form-control-lg" name="rim">
                                                        <option selected="">Rim</option>
                                                        <option value="1">Full Rim</option>
                                                        <option value="2">Semi Rimless</option>
                                                        <option value="2">Rimless</option>
                                                        
                                            </select> <br>
                                            <input type="text" class="form-control form-control-lg" placeholder="Size" name="size"> <br>
                                            
                                            <select class="form-control form-control-lg" name="color">
                                                        <option selected="">Color</option>
                                                        <option value="1">Black</option>
                                                        <option value="2">Gray</option>
                                                        <option value="2">Red</option>
                                                        <option value="2">Blue</option>
                                                        <option value="2">White</option>
                                                        <option value="2">Transparent</option> 
                                            </select> <br>
                                            <select class="form-control form-control-lg" name="shape">
                                                        <option selected="">Shape</option>
                                                        <option value="1">Diamond</option>
                                                        <option value="2">Heart-Shaped</option>
                                                        <option value="2">Oval</option>
                                                        <option value="2">Square</option>
                                                        <option value="2">Triangular</option>
                                                        <option value="2">Round</option>
                                            </select> <br>
                                            <select class="form-control form-control-lg" name="material">
                                                        <option selected="">Material</option>
                                                        <option value="1">Polycarbonate</option>
                                                        <option value="2">Stainless Steel</option>
                                                        <option value="2">Acetate</option>
                                                        <option value="2">Metal</option>
                                                        <option value="2">Eco Polyamide</option>
                                            </select> <br>
                                            <input type="text" class="form-control form-control-lg" placeholder="Price" name="price"> <br>
                                            <select class="form-control form-control-lg" name="gender">
                                                        <option selected="">Gender</option>
                                                        <option value="1">Men</option>
                                                        <option value="2">Women</option>
                                            </select> <br>
                                            
                                            <select class="form-control form-control-lg" name="type">
                                                        <option selected="">Type</option>
                                                        <option value="1">Eyeglasses</option>
                                                        <option value="2">Sunglasses</option>
                                                        <option value="2">Sports</option>
                                            </select> <br>

                                            <h6>Add frame image</h6>
                                            <input type="file" class="form-control form-control-lg"  id="img" name="image" accept="image/*">  <br>
                                            
                                            <input type="text" class="form-control form-control-lg" placeholder="Description" name="desc"> <br>
                                            </div>
                                    <div class="modal-footer">
                                    <button type="button" class="button delete" data-dismiss="modal">Close</button>
                                                <input type="submit" class="button save" value="submitEditFrame">  <!-- To be edited with the form -->
                                </form>
                                </div>
                            </div>
                        <?php  
                            if(isset($_POST["submitEdiFrame"])){

                                $code = $_POST["code"];
                                $brandname = $_POST["brandname"];
                                $rim = $_POST["rim"];
                                $size= $_POST["size"];
                                $color = $_POST["color"];
                                $shape = $_POST["shape"];
                                $material = $_POST["material"];
                                $price = $_POST["price"];
                                $gender = $_POST["gender"];
                                $type =$_POST["type"];
                                $img = $_POST["image"];
                                $desc =$_POST["desc"];

                                $data = [
                                    'code' => $code,
                                    'brandname' => $brandname,
                                    'rim' => $rim,
                                    'size' => $size,
                                    'color' => $color,
                                    'shape' => $shape,
                                    'material' => $material,
                                    'price' => $price,
                                    'gender' => $gender,
                                    'type' => $type,
                                    'img' => $img,
                                    'desc' => $desc,
                                    
                                ];
                                $id = $_POST["id"];
                                $sql="UPDATE user SET FrameCode=:code, FrameType=:type, FrameBrand=:brandname, FrameDescription=:desc,
                                FrameColor=:color, FrameRim=:rim, FrameMaterial=:material, AssignedGender=:gender, FrameSize=:size,
                                FrameImg=:img, FrameShape=:shape, FramePrice=:price WHERE FrameID=:id "; 
                                $stmt= $pdo->prepare($sql);
                                $stmt->execute($data);
                            }
                        ?>

                        </div>
                    </div>
        <!-- Delete Confirmation Modal -->
                    <div class="col-md-4 col-sm-12 mb-30">
							<div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-body text-center font-18">
											<h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to delete this frame?</h4>
											<div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
												<div class="col-6">
													<button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
													NO
												</div>
												<div class="col-6" >
													<button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" style="background-color:#1c2d5e; border-color:#1c2d5e;"  data-dismiss="modal"><i class="fa fa-check"></i></button>
													YES
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
					</div>

			    
    <table class="styled-table">
    
    <thead>
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Type</th>
            <th>Brand</th>
            <th>Color</th>
            <th>Rim</th>
            <th>Material</th>
            <th>Gender</th>
            <th>Size</th>
            <th>Price</th>
            <th>Shape</th>
            <th>Description</th>
            <th>Image</th> 
            <th></th>
            
        </tr>
    </thead>
    <tbody>
        
            <?php $query = "SELECT * from frame";
            $d =$pdo -> query($query);
            foreach($d as $data){ ?> 
            <tr> 
             <form method="post">
                <td><?php echo $data['FrameID']; ?></td>
                <td><?php echo $data['FrameCode'] ; ?></td>
                <td><?php //echo $data['FrameType'] ;
                if($data['FrameType'] =="1"){  echo "Optical";  }
                if($data['FrameType'] =="2"){  echo "Sunglasses";  }
                if($data['FrameType'] =="3"){  echo "Eyeglasses";  } ?></td>
                <td><?php echo $data['FrameBrand'] ; ?></td>
                <td><?php //echo  $data['FrameColor'];
                if($data['FrameColor'] =="1"){  echo "Black";  }
                if($data['FrameColor'] =="2"){  echo "Gray";  }
                if($data['FrameColor'] =="3"){  echo "Red";  }
                if($data['FrameColor'] =="4"){  echo "Blue";  }
                if($data['FrameColor'] =="5"){  echo "White";  }
                if($data['FrameColor'] =="6"){  echo "Transparent";  }
                ?></td>
                <td><?php //echo $data['FrameRim'] ; 
                if($data['FrameRim'] =="1"){
                    echo 'FullRim';
                } 
                if($data['FrameRim'] =="2"){  echo "Half-Rim";  }
                if($data['FrameRim'] =="3"){  echo "Rim-less";  }
                 ?></td>
                <td><?php //echo  $data['FrameMaterial'] ; 
                if($data['FrameMaterial'] =="1"){  echo "Polycarbonate";  }
                if($data['FrameMaterial'] =="2"){  echo "Stainless Steel";  }
                if($data['FrameMaterial'] =="3"){  echo "Acetate";  }
                if($data['FrameMaterial'] =="4"){  echo "Metal";  }
                if($data['FrameMaterial'] =="5"){  echo "Eco-Polyamide";  } ?></td>
                <td><?php //echo  $data['AssignedGender'] ;
                if($data['AssignedGender'] =="1"){  echo "Women";  }
                if($data['AssignedGender'] =="2"){  echo "Men";  } 
                if($data['AssignedGender'] =="3"){  echo "Girls";  } 
                if($data['AssignedGender'] =="4"){  echo "Boys";  } ?></td>
                <td><?php echo  $data['FrameSize'] ; ?></td>
                <td><?php echo  $data['FramePrice']  ; ?></td>
                <td><?php //echo  $data['FrameShape'];
                if($data['FrameShape'] =="1"){  echo "Cat Eye";  }
                if($data['FrameShape'] =="2"){  echo "Round";  } 
                if($data['FrameShape'] =="3"){  echo "Rectangle";  } 
                if($data['FrameShape'] =="4"){  echo "Square";  }
                if($data['FrameShape'] =="5"){  echo "Oval";  }
                if($data['FrameShape'] =="6"){  echo "Geometric";}
                if($data['FrameShape'] =="7"){  echo "Browline";  }
                if($data['FrameShape'] =="8"){  echo "Aviator"; } ?></td>
                <td><?php echo  $data['FrameDescription'] ; ?></td>
                <td><?php echo  $data['FrameImage'] ; ?></td>
                <td><input type="checkbox" id="check" name="checkframe" ></td> 
            <?php  } ?>
            </form>
        
        
        </tr>
     
        
            
    </tbody>
    </table>   

    </div>
    </div>
        
</div>



</body>
</html>
