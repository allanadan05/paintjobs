<div class="container">
    <div class="title">
        New Paint Job
    </div>
</div>

<div class="container">
    <div class="car-workspace">
        <img class="car-image" id="left-car" src="images/car-default.png">
        <img class="arrow" src="images/arrow.png">
        <img class="car-image" id="right-car" src="images/car-default.png">
    </div>
</div>


<div class="container">
    <div class="car-details">
    <h4>Car Details</h4>
    <form action="api.php" method="POST">
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Plate number</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" name="platenum" id="inputPassword" placeholder="Plate number" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Current Color</label>
            <div class="col-sm-8">
                <select class="form-control" id="currentcolor" name="currentcolor">
                    <option selected >Current color</option>
                    <option value="red">red</option>
                    <option value="green">green</option>
                    <option value="blue">blue</option>
                </select>
            </div>  
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Target Color</label>
            <div class="col-sm-8">
            <select class="form-control" id="targetcolor" name="targetcolor">
                <option selected >Target color</option>
                <option value="red">red</option>
                <option value="green">green</option>
                <option value="blue">blue</option>
            </select>
            </div>
        </div>

        <button type="submit" class="btn-red" name="submit" value="new">Submit</button>
    </form>
    </div>
</div>

