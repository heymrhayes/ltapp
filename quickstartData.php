<?php require "_apphead.php"; ?>

<div class="container">
    <h1>QuickStart Student Data</h1>
    Filter Students by:
    <label for="selCompletionStatus">Completion Status</label>
    <select name="selCompletionStatus" id="selCompletionStatus">
        <option value="Any" selected>Any</option>
        <option value="Y">Marked as Complete</option>
        <option value="">Not marked as Complete</option>
    </select>
    <label for="selGrade">Grade Level (17-18 SY)</label>
    <select name="selGrade" id="selGrade">
        <option value="Any" selected>Any</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
    <label for="txtStudentId">Student Id</label>
    <input type="text" id="txtStudentId" name="txtStudentId" placeholder="8-digit student id">
    <label for="selLimit">Max Records</label>
    <select name="selLimit" id="selLimit">
        <option value="10">10</option>
        <option value="100" selected>100</option>
        <option value="1000">1000</option>
        <option value="5000">5000</option>
    </select>

    <a id="search" href="#" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</a>
</div>
<hr>
<div id="searchResults" class="container">
    <table id="tableResults" class="table table-striped">
        <tbody></tbody>
        
    </table>
    
</div>
<script>
    $(function() {
        $("#search").on("click", function() {
            makeDataRequest();
        })
    })
    
    var displayColumns = ["qs_complete","id","first_name","last_name","grade","qs_address1","qs_area1","qs_phone1a","qs_phone1b"];
    
    function makeDataRequest() {
       var baseUrl = "https://lanetech.org/api/v2/api.php/student_database/";
       var url = baseUrl;
       if ($.isNumeric($("#txtStudentId").val())) {
           url = baseUrl + $("#txtStudentId").val() + "?";
       } 
       else {
           url += "?"
           if ($("#selGrade").val() != "Any") {
             url += "&grade=" + $("#selGrade").val(); 
           } 
           if ($("#selCompletionStatus").val() != "Any") {
               url += "&qs_complete=" + $("#selCompletionStatus").val(); 
           }
       }
       
       url += "&limit=" + $("#selLimit").val();
       callApi(url);
        
        
        
        
    }
    
    function callApi(url){
            //   using POST for every request due to Google Auth;
            //   using http request method names as "method" item in passed data
            $.post(
                url, 
                // 
                { 
                    idtoken: id_token,
                    method: "GET"
                
                },
                function(response) {
                    console.log("in response handler");
                    $("#tableResults").html("");
                    $("#tableResults").append("<tr id='tableHead'></tr>");
                    $.each(displayColumns, function(i,v){
                        $("#tableHead").append("<th>" + v + "</th>");
                    });
                    $("#tableResults").append("<tbody></tbody>");
                    console.log(response);
                    $.each(response.data, function(di,dv){
                        console.log(dv);
                        var row = $("<tr>");
                        var cell;
                        console.log(dv);
                        $.each(displayColumns, function(ci,cv){
                            row.append("<td>" + dv[cv] + "</td>");
                        })
                        
                        $("#tableResults tbody").append(row);
                    })
                    
                    
                    
                });
        };
        
    
    
    
    
</script>