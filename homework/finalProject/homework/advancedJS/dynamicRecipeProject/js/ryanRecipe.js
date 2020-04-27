// JavaScript Document

$(document).ready(function(){
	
	$("#recipe1").show();
	$("#recipe2").hide();
	$("#recipe3").hide();
	
	$(".halfSizePick").hide();
	$(".normalSizePick").hide();
	$(".doubleSizePick").hide();
	
	$(".1instructions").hide();
	$(".2instructions").hide();
	$(".3instructions").hide();

	$(".1ingredients").hide();
		
	// VARIABLES
	let recipe1 = document.querySelector("#recipe1");
	let recipe2 = document.querySelector("#recipe2");
	let recipe3 = document.querySelector("#recipe3");
	let select = document.querySelector("#recipeSelect");
	
	// Selecting the recipe
	$("#firstRecipe").click(function(){
		//alert("crockpot chilli");
		$("#recipe1").show();
		$("#recipe2").hide();
		$("#recipe3").hide();
	});
	
	$("#secondRecipe").click(function(){
		//alert("option 2");
		$("#recipe1").hide();
		$("#recipe2").show();
		$("#recipe3").hide();
	});
	
	$("#thirdRecipe").click(function(){
		//alert("option 3");
		$("#recipe1").hide();
		$("#recipe2").hide();
		$("#recipe3").show();
	});
	
	// SELECTING QUANTITY
	$(".halfSize").click(function(){
		$(".halfSizePick").show();
		$(".normalSizePick").hide();
		$(".doubleSizePick").hide();
		
		$(".1instructions").show();
		$(".2instructions").hide();
		$(".3instructions").hide();
	});
	
	$(".normalSize").click(function(){
		//alert("option 2");
		$(".halfSizePick").hide();
		$(".normalSizePick").show();
		$(".doubleSizePick").hide()
		
		$(".1instructions").hide();
		$(".2instructions").show();
		$(".3instructions").hide();
	});
	
	$(".doubleSize").click(function(){
		//alert("option 3");
		$(".halfSizePick").hide();
		$(".normalSizePick").hide();
		$(".doubleSizePick").show()
		
		$(".1instructions").hide();
		$(".2instructions").hide();
		$(".3instructions").show();
	});
	
	// SHOWING AND HIDING THE INGREDIENTS AND INSTRUCTIONS
	$(".showIn").click(function(){
		$(".1ingredients").toggle();
	});
	
	$(".toggleIns").click(function(){
		$(".instructions").toggle();
		//$(".2instructions").toggle();
		//$(".3instructions").toggle();
	});
	
	//COPYWRITE
	$('footer span').html('©Copywrite ' + new Date().getFullYear());
	
	
	
	
	
	
	
	
	
	
});