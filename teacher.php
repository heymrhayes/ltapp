<?php 
    //require_once getenv('init_path');
    require "_apphead.php";
    
    ?>
    


<div class="container">
    <h1>Teacher</h1>
    Filter  by:
    <label for="selDepartment">Completion Status</label>
    <select name="selDepartment" id="selDepartment">
        <option value="Any" selected>Any</option>
        
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
    <table id="tableResults" data-detail-view="true" class="table table-striped">

    </table>
    
</div>
<script>

    var data;
    

function testPatch() {
        $.post(
                    'https://lanetech.org/api/v2/api.php/Teacher/206075', 
                    
                    { 
                        idtoken: id_token,
                        method: "PATCH",
                        columns: {
                            old_id: 1
                        }
                    
                    },
                    function(response) {
                        console.log(response);
                    });
        
        };


    $(function() {
        
        
        
        
        function loadFilterValues() {
            $.post(
                    'https://lanetech.org/api/v2/api.php/Department/', 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    
                    },
                    function(response) {
                        $.each(response.data, function(i,v){
                            $("#selDepartment").append('<option value=' + v["id"] +'>' + v["name"] + '</option>');
                        })
                        
                        
                        
                    })
        
            }
         
         
        setTimeout(loadFilterValues,3000); 
                
        $("#search").on("click", function() {
            makeDataRequest();
        })
        
        
        
        
    })
    
    
    
    var displayColumns = ["id","firstName","lastName","department","username","email"];
    
    function makeDataRequest() {
       var baseUrl = "https://lanetech.org/api/v2/api.php/Teacher/";
       var url = baseUrl;
       if ($.isNumeric($("#txtStudentId").val())) {
           url = baseUrl + $("#txtStudentId").val() + "?";
       } 
       else {
           url += "?"
           if ($("#selGrade").val() != "Any") {
             url += "&grade=" + $("#selGrade").val(); 
           } 
           if ($("#selDepartment").val() != "Any") {
               url += "&department_id=" + $("#selDepartment").val(); 
           }
       }
       
       url += "&limit=" + $("#selLimit").val();
       callApi(url);
        
        
        
        
    }
    
    function callApi(url, dataMethod = 'GET'){
            //   using POST for every request due to Google Auth;
            //   dataMethod uses HTTP request methods, but all requests are POSTS
            //   using http request method names as "method" item in passed data
            $.post(
                url, 
                // 
                { 
                    idtoken: id_token,
                    method: dataMethod
                
                },
                function(response) {
                    var columns = [];
                    var column;
                    $.each(response.data[0], function (k,v) {
                         column = {};
                         column.field = k;
                         column.title = k;
                         column.sortable = true;
                         columns.push(column);
                    });
                    console.log(columns);
                    console.log(response.data);
    //                 var myColumns = [{
    //     field: 'id',
    //     title: 'id'
    // }, {
    //     field: 'firstName',
    //     title: 'First Name',
    //     sortable: true
    // }];
                    $('#tableResults').bootstrapTable({
                        detailFormatter: detailFormatter,
                        columns: columns,
    // columns: columns,
    data: response.data

                    });
                });
                // function(response) {
                //     data = response.data;
                //     $("#tableResults").html("");
                //     $("#tableResults").append("<tr id='tableHead'></tr>");
                //     $.each(displayColumns, function(i,v){
                //         $("#tableHead").append("<th>" + v + "</th>");
                //     });
                //     $("#tableResults").append("<tbody></tbody>");
                //     //console.log(typeof response);
                //     $.each(response.data, function(di,dv){
                //         var row = $("<tr>");
                //         var cell;
                //         console.log(dv);
                //         $.each(displayColumns, function(ci,cv){
                //             row.append("<td>" + dv[cv] + "</td>");
                //         })
                        
                //         $("#tableResults tbody").append(row);
                //     })
                    
                    
                    
                // });
        };
        
    
        function detailFormatter(index, row) {
            var html = [];
            $.each(row, function (key, value) {
                html.push('<p><b>' + key + ':</b> ' + value + '</p>');
            });
            return html.join('');
        }
    
    
</script>