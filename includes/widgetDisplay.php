<?php
function DisplayWidgetPosition($Position){
	echo '<div ng-controller="WidgetController">' ;
?>
<!-- Create widget div -->
<div ng-repeat="widget in getWidgetArray('<?php echo $Position; ?>') | filter:widgetFilter">
        <div ng-include="widget.path"></div>   
</div>
<?php
echo '</div>';
} // END DisplayWidget


// Create widget array
function CreateWidgetArray(){
    global $WidgetAttachment, $WidgetDirectory;
    if(!empty($WidgetAttachment)){
        $i = 0;
        while($i< count($WidgetAttachment)){
            echo"{   
            'url': '/".$WidgetAttachment[$i][0]."', 'path': '".
            $WidgetDirectory."/".$WidgetAttachment[$i][2].".php','position': '".
            $WidgetAttachment[$i][1]."'},";
            $i++ ;
        }
    }
}

?>

<!-- Create widget controller -->
<script type="text/javascript">
myApp.controller('WidgetController', function($scope, $location) {
  
    // Create JSON array using PHP array
    $scope.WidgetArray =[<?php CreateWidgetArray();?>];

    // Create custom $scope filter to select widgets based on URL and position.
    $scope.getWidgetArray = function($getPosition){
        $scope.widgetFilter = function(widget){
            if($location.url()){ // If any URL is specified, find widgets
                return  widget.url === $location.url() && 
                        widget.position === $getPosition;
            }else{ // If no URL is specified, show home page widgets
                return  widget.url === '<? echo "/".$HomePage ; ?>' && 
                        widget.position === $getPosition;
            }
        };
        return $scope.WidgetArray;   
    }
   
});
</script>