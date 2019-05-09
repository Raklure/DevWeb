(function() {
	var form = document.createElement("form");
	var classe = document.createElement("fieldset");
	var classeLegend = document.createElement("legend");
	var options = document.createElement("fieldset");
	var optionsLegend = document.createElement("legend");

	classeLegend.innerHTML = "Classe";
	optionsLegend.innerHTML = "Options";

	classe.appendChild(classeLegend);
	options.appendChild(optionsLegend);

	var eco = document.createElement("span");
	var ecoInput = document.createElement("input");
	eco.innerHTML = "Economique";
	ecoInput.type = "radio";
	ecoInput.name = "classe";
	ecoInput.id = "économique";
	ecoInput.checked = "checked";
	classe.appendChild(eco);
	classe.appendChild(ecoInput);

	var aff = document.createElement("span");
	var affInput = document.createElement("input");
	aff.innerHTML = "Affaires";
	affInput.type = "radio";
	affInput.name = "classe";
	affInput.id = "affaires";
	classe.appendChild(aff);
	classe.appendChild(affInput);

	var pre = document.createElement("span");
	var preInput = document.createElement("input");
	pre.innerHTML = "Première";
	preInput.type = "radio";
	preInput.name = "classe";
	preInput.id = "première";
	classe.appendChild(pre);
	classe.appendChild(preInput);

	form.appendChild(classe);
	form.appendChild(options);
	document.body.prepend(form);
})();