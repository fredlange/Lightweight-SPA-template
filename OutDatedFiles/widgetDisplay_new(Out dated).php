<?php


function DisplayWidget($Position){
	echo '<br><br><br><br><div ng-controller="WidgetController">' ;
	echo 'Requested position: '. $Position. '<br>';
	
	global $WidgetAttachment; //Import widget array


?>


<p>TEST USING JAVA AND CONDITIONS</p>
<div ng-repeat="x in getWidgets('<?php echo $Position; ?>')">
    <p>Här börjar repeat</p>
	<!--  <div ng-include="x.path"></div> -->
</div>



<?
echo '</div><br><br><br>';
} // END DisplayWidget
?>

<script type="text/javascript">
myApp.controller('WidgetController', function($scope, $location) {
  


    // TEST ARRAY + FUNCTION
    $WidgetArray =
     [
        [   '/page1',                   // Show on URL
            'widgets/Greeting.php',     // Path to widget
            'left'                      // Widget position
        ],

        [   '/page1',                   // Show on URL
            'widgets/Greeting2.php',    // Path to widget
            'left'                      // Widget position
        ],

        [   '/page1',                   // Show on URL
            'widgets/Greeting.php',     // Path to widget
            'left'                      // Widget position
        ],

        [   '/page1',                   // Show on URL
            'widgets/Greeting.php',     // Path to widget
            'left'                      // Widget position
        ],
    ];

    $scope.getWidgets = function($getPosition){
         
        for($i = 0 ; $i < 2 ; $i++){
            document.write($WidgetArray[0][1]);
        };




        if($getPosition === 'left'){
            
        }else{
            
        }
        
    }; 

});
</script>