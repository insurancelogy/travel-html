<?php include_once("header.php"); ?>


<div class="container">

    <!-- Top 3 buttons -->
    <div class="row">
        <div class="col-12">
            <div class="S_buttonContainer">
                <a href="#" class="S_button text-center">
                    <span> Schengen </span>
                </a>
                <a href="#" class="S_button text-center">
                    <span> Schengen + Uk </span>
                </a>
                <a href="#" class="S_button text-center">
                    <span> Worldwide + USA & Canada </span>
                </a>
            </div>
        </div>
    </div>

    <!-- contact-form -->

    <div class="row mt-4">
        <div class="col-12">
            <div class="card userDetailsCard">
                <div class="card-body">

                    <div class="text-center">
                        <span class="h4"> Main contact details </span>
                    </div>

                    <div class="d-flex flex-wrap flex-md-nowrap  w-100">
                        <div class="w-100  mt-3 mx-0 mx-md-2">
                            <label for="username"> Username </label>
                            <input type="text" class="form-control" name="fullName" placeholder="username">
                        </div>
                        <div class="w-100 mt-3 mx-0 ml-0 mx-md-2">
                            <label for="email"> Email </label>
                            <input type="email-id" class="form-control" name="fullName" placeholder="email">
                        </div>
                    </div>

                    <div class="d-flex flex-wrap flex-md-nowrap  w-100">
                        <div class="w-100  mt-3 mx-0 mx-md-2">
                            <label for="username"> Gender </label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="male"> Male </option>
                                <option value="female"> Female </option>
                                <option value="notSpecified"> Not Specified </option>
                            </select>
                        </div>
                        <div class="w-100 mt-3 mx-0 ml-0 mx-md-2">
                            <label for="email"> DOB </label>
                            <input type="datetime-local" name="dob" id="dob" class="form-control">
                        </div>
                    </div>


                    <!-- dynamically adding members start-->
                    <div class="d-flex flex-wrap flex-md-nowrap w-100">

                        <div class="w-100  mt-3 mx-0 mx-md-2" id="addMember">
                            <label for="addMembers"> Add Member </label>
                            <select name="member[]" id="member" class="form-control">
                                <option name="" id=""> Select Family Member </option>
                                <option value="husband">Husband</option>
                                <option value="wife">Wife</option>
                                <option value="spouse">Spouse</option>
                                <option value="mother">Mother</option>
                                <option value="father">Father</option>
                                <option value="son">Son</option>
                                <option value="daughter">Daughter</option>
                            </select>
                        </div>
                    </div>

                    <div id="addMoreMember"></div>


                    <div class="d-flex flex-wrap flex-md-nowrap  w-100">
                        <div class="">
                            <label for=""> &nbsp; </label>
                            <button class="btn btn-danger mt-2" onclick="addMember()">
                                <i class="fas fa-plus"></i> Add Member
                            </button>
                        </div>
                    </div>
                    <!-- dynamically adding members end-->

                    <div>
                        <div class="text-center">
                            <h4> Choose Traveling Dates </h4>
                        </div>

                        <div class="d-flex flex-wrap flex-md-nowrap  w-100">
                            <div class="w-100  mt-3 mx-0 mx-md-2">
                                <label for="username"> From </label>
                                <input type="date" class="form-control" name="fullName" placeholder="username">
                            </div>
                            <div class="w-100 mt-3 mx-0 ml-0 mx-md-2">
                                <label for="email"> To </label>
                                <input type="Date" class="form-control" name="fullName" placeholder="email">
                            </div>
                        </div>

                    </div>


                    <div class="text-center mt-4">
                        <h5> Trip Type </h5>
                        <div class="d-flex justify-content-around">
                            <div class="d-flex">

                                <input type="radio" name="tripType" class="mt-1 mx-2" id="annual">
                                <label for="annual"> <b>Annual</b> </label>
                            </div>
                            <div class="d-flex">
                                <input type="radio" name="tripType" id="single" class="mt-1 mx-2">
                                <label for="single"> <b>Single</b> </label>
                            </div>

                        </div>
                    </div>


                    <div class="mt-4">
                        <p> I/we hereby declare that to the best of my/our knowledge:</p>
                        <p> (i) I/we have read and agreed to the terms and conditions of the policy </p>
                        <p>(ii) All insured persons are in good health</p>

                        <p> <input type="checkbox" name="auth"> I confirm that all travelers have valid UAE
                            residence
                            visa and that the travel will start from
                            UAE. </p>
                    </div>



                    <div class="mt-4 text-center">
                        <input type="submit" name="" id="" class="btn btn-danger">
                    </div>

                </div>
            </div>
        </div>
    </div>



</div>










<script>
function addMember() {

    var html = '';
    html += '<div class="d-flex flex-wrap flex-md-nowrap  mt-3 mx-md-2" id="inputFormRow">';
    html += '<select name="member[]" id="member" class="form-control">';
    html += '<option name="" id=""> Select Family Member </option>';

    html += '<option value = "husband" > Husband </option> ';
    html += '<option value = "wife" > Wife </option> ';
    html += '<option value = "spouse" > Spouse </option> ';
    html += '<option value = "mother" > Mother </option> ';
    html += '<option value = "father" > Father </option> ';
    html += '<option value = "son" > Son </option> ';
    html += '<option value = "daughter" > Daughter </option> ';

    html += '</select > ';
    html += '<button id="removeRow" type="button" class="btn btn-danger fas fa-trash"></button>';
    html += '</div > ';


    $('#addMoreMember').append(html);


    // remove row
    $(document).on('click', '#removeRow', function() {
        $(this).closest('#inputFormRow').remove();
    });



}
</script>

<?php include_once("footer.php"); ?>