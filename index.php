<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
<div class="wrap" data-pos="0">
    <div class="header">
        <div class="bg"></div>
        <div class="filter"></div>
        <div class="title">
            <div class="title">
                <span>FLIGHT BOOKING WEBSITE</span>
            </div>
        </div>
    </div>

    <div class="content">
        <section>
            <div class="form">
                <div class="control select">
                    <div class="control-head">
                        <div>
                            <h6>From</h6>
                            <select id="source" align="center" name="source">
                            
                                <option value="Mumbai">Mumbai</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="London">London</option>
                                <option value="New York">New York</option>
                                <option value="Abu Dhabi">Abu Dhabi</option>
                                </select>
                            
                        </div>			
                    </div>
                    
                            <h6>To</h6>
                            <select id="destination" align="center" name="destination">
                                
                                <option value="Sydney">Sydney</option>
                                <option value="Singapore">Singapore</option>
                                <option value="London">London</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Goa">Goa</option></select>
                        </div>			
                    </div>
                   
                <div class="control dateinput">
                    <form action="/index.php">
                        <label for="departure">Departure:</label>
                        <input type="date" id="departure" name="departure">
                      </form>
                        </div>
                    <div class="control-item">
                        <h6>Passengers</h6>
                        <label>
                            Adults: <input type="number" id="Number"><br>
                            Kids: <input type="number" id="Number"><br>
                            Elders: <input type="number" id="Number"><br>
                        </label>
                        <script>
                            function myFunction() {
                              document.getElementById("Number").stepUp(5);
                            }
                            </script>
                    <div class="control-item">
                        <h6 style="margin-bottom: 8px">Class</h6>
                        <label>
                            <input type="radio" name="seat" value="Economy" checked="checked">
                            <span>Economy</span>
                        </label>
                        <label>
                            <input type="radio" name="seat" value="Business">
                            <span>Business</span>
                        </label>
                        <label>
                            <input type="radio" name="seat" value="First Class">
                            <span>First Class</span>
                        </label>
                    </div>
                </div> <br>
                <div class="control">
                    <button class="btnSearch">Search Flights</button>
                </div>
<br>
            </div>
            <div class="list">
                <div class="nano">
                    <div class="nano-content">
                                    
                    </div>
                </div>					
            </div>
            
            <div class="ticket">
                <section>
                    
                </section>
                <button class="btnBook">BOOK FLIGHT</button>
            </div>

        </section>
    </div>		

</div>
</html>