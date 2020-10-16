//ES JS.

//TOMARAS LOS DATOS DEL PL DESDE EL LOCALSTORAGE

//PEDIRAS LA SIGUIENTE INFORMACION

/*SELECT fechaImp
FROM sasisopa
WHERE idCESH = '';*/

/*SELECT idCESH
FROM politica
WHERE idCESH = '';

si existe entonces-> SELECT fechaD FROM politica WHERE idCESH = '';
si no existe entonces*/

var ganttData = [
	{
		id: 1, name: "Actividad 1", series: [
			{ name: "Planned", start: new Date(2020,06,30), end: new Date(2020,07,05) },
			{ name: "Projected", start: new Date(2020,06,30), end: new Date(2020,08,00), color: "#e0e0e0" }
		]
	}/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
	/*, 
	{
		id: 2, name: "Feature 2", series: [
			{ name: "Planned", start: new Date(2020,00,05), end: new Date(2020,00,20) },
			{ name: "Actual", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#f0f0f0" },
			{ name: "Projected", start: new Date(2020,00,06), end: new Date(2020,00,17), color: "#e0e0e0" }
		]
	}*/
];