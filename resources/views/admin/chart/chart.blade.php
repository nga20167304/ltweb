@extends("admin.layout.index")

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
		<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
		<hr>
		<div>
			<h4><strong>Khoảng thời gian</strong></h4>
			<form action="">
				<div class="col-md-4">
					<div class="form-group">
						<label for="start-date">Từ ngày</label>
						<input  class="form-control" type="date" name="start-date" id="start-date" required="">
					</div>
					<div class="form-group">
						<label for="end-date">Đến ngày</label>
						<input  class="form-control" type="date" name="end-date" id="end-date" required="">
					</div>
					<button type="button" id="check-period" class="btn btn-primary">Kiểm tra</button>
				</div>		
			</form>
		</div>
		<div>
			<h3 class="text-center""><strong></strong></h2>
		</div>
	</div>
</div>

@endsection


@section('script')
	<script src="admin_asset/js/canvasjs.min.js"></script>
	<script>
		function strDate(vnDate){
			tmp = vnDate.split("/");
			res = tmp[2] + '-'  + tmp[1] + '-' +tmp[0];
			return res;
		}
		var chartData = [];
		var dataPoints = [];
		var totalRevenue = 0;
		window.onload = function () {
			$.get("chartdata",function(data){
				chartData = JSON.parse(data);
				chartData.forEach(function(cValue){
					var money = Number((cValue.money/1000000).toFixed(1));
					dataPoints.push({x: new Date(strDate(cValue.date)) ,y: money});
					totalRevenue += Number(cValue.money);
				});
				var chart = new CanvasJS.Chart("chartContainer", {
					animationEnabled: true,
					theme: "light2",
					title:{
						text: "Biểu đồ danh số"
					},
					axisX:{
						title : "Ngày", 
						includeZero: false
					},
					axisY:{
						title : "Doanh thu (triệu)", 
						includeZero: false
					},

					data: [{        
						type: "line",       
						dataPoints: dataPoints
					}]
				});
				chart.render();
				$('h3.text-center strong').text("Tổng doanh thu: " + (totalRevenue/1000000).toFixed(1) + " triệu đồng")
			});	
		}
		$('#check-period').click(function () {
			if(!$('#start-date').val()){
				alert("Enter start date to check");
				return false;
			}else if(!$('#end-date').val()){
				alert("Enter end date to check");
				return false;
			}else{
				var startDate = new Date($('#start-date').val());
				var endDate = new Date($('#end-date').val());
				var newDataPoints = [];
				totalRevenue = 0;
				dataPoints.forEach(function(data){
					if((data.x >= startDate)&&(data.x <= endDate)){
						newDataPoints.push(data);
						totalRevenue += data.y;
					}
				});
				var chart = new CanvasJS.Chart("chartContainer", {
					animationEnabled: true,
					theme: "light2",
					title:{
						text: "Biểu đồ danh số"
					},
					axisX:{
						title : "Ngày", 
						includeZero: false
					},
					axisY:{
						title : "Doanh thu (triệu)", 
						includeZero: false
					},

					data: [{        
						type: "line",       
						dataPoints: newDataPoints
					}]
				});
				chart.render();
				$('h3.text-center strong').text("Tổng doanh thu: " + totalRevenue.toFixed(1) + " triệu đồng");

			}
		});

	</script>
@endsection