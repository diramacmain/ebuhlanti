
















  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Charts script -->
	<script>
		var data = {
		labels: ['Abongile', 'Marcks', 'Max', 'Monwabisi', 'Ncedo', 'Nqaba', 'Sipho', 'Vusi', 'Vuyisa'],
		series: [
			[36410, 12920, 39880, 6000, 67240, 18800, 23920, 6190, 20400],
			[3000, 2000, 9000, 5000, 4000, 6000, 4000, 6000, 7000]
		]
		};

		var options = {
		seriesBarDistance: 10
		};

		var responsiveOptions = [
		['screen and (max-width: 640px)', {
			seriesBarDistance: 5,
			axisX: {
			labelInterpolationFnc: function (value) {
				return value[0];
			}
			}
		}]
		];
		new Chartist.Bar('#memberVsOut', data, options, responsiveOptions);
		var data = {
		labels: ['Disbursed', 'Request Aproved', 'Canceled  and Rejected'],
		series: [20, 15, 40]
		};

		var options = {
		labelInterpolationFnc: function(value) {
			return value[0]
		}
		};

		var responsiveOptions = [
		['screen and (min-width: 640px)', {
			chartPadding: 30,
			labelOffset: 100,
			labelDirection: 'explode',
			labelInterpolationFnc: function(value) {
			return value;
			}
		}],
		['screen and (min-width: 1024px)', {
			labelOffset: -20,
			chartPadding: 20
		}]
		];

		new Chartist.Pie('#requestPie', data, options, responsiveOptions);
	</script>
  <!-- Menu Toggle Script -->
  <script>
   $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

<script type="text/javascript">
  	$(document).ready( function () {
    $('#requestTable').DataTable();
	$('#collectionsTableM').DataTable();
	$('#collectionsTableA').DataTable();

	$(".sectionDiv").hide();
	$("#section_ReqForm").show();
	$("#section_ReqTable").show();

	$("#allCollections").click(function(){
		$(".sectionDiv").hide();
		$("#section_ACol_Table").show();
		
	});

	$("#myCollections").click(function(){
		$(".sectionDiv").hide();
		$("#section_PayForm").show();
		$("#section_MCol_Table").show();
	});

	$("#dashboard").click(function(){
		$(".sectionDiv").hide();
		$("#section_ReqForm").show();
		$("#section_ReqTable").show();
		
	});
	$("#chartsPage").click(function(){
		$(".sectionDiv").hide();
		$("#section_Charts").show();
		
	});

	});	
</script>
</body>

</html>