<?php
/**
*@package pXP
*@file gen-PlantillaCorreo.php
*@author  (admin)
*@date 24-06-2013 21:08:35
*@description Archivo con la interfaz de usuario que permite la ejecucion de todas las funcionalidades del sistema
*/

header("content-type: text/javascript; charset=UTF-8");
?>
<script>
Phx.vista.PlantillaCorreo=Ext.extend(Phx.gridInterfaz,{

	constructor:function(config){
		this.maestro=config.maestro;
    	//llama al constructor de la clase padre
		Phx.vista.PlantillaCorreo.superclass.constructor.call(this,config);
		this.init();
		this.load({params:{start:0, limit:this.tam_pag}})
	},
	tam_pag:50,
			
	Atributos:[
		{
			//configuracion del componente
			config:{
					labelSeparator:'',
					inputType:'hidden',
					name: 'id_plantilla_correo'
			},
			type:'Field',
			form:true 
		},
		{
			//configuracion del componente
			config:{
					labelSeparator:'',
					inputType:'hidden',
					name: 'nombre_archivo'
			},
			type:'Field',
			form:true 
		},
		{
			//configuracion del componente
			config:{
					labelSeparator:'',
					inputType:'hidden',
					name: 'extension_archivo'
			},
			type:'Field',
			form:true 
		},
		{
			config:{
				name: 'codigo',
				fieldLabel: 'Codigo',
				allowBlank: false,
				anchor: '80%',
				gwidth: 100,
				maxLength: 20
			},
			type:'TextField',
			filters:{pfiltro:'plcr.codigo',type:'string'},
			id_grupo:1,
			grid:true,
			form:true
		},/*
		{
			config:{
				name: 'body',
				fieldLabel: 'Mensaje',
				allowBlank: true,
				anchor: '80%',
				gwidth: 100,
				maxLength:-5
			},
			type:'TextField',
			filters:{pfiltro:'plcr.body',type:'string'},
			id_grupo:1,
			grid:true,
			form:true
		},*/
		{
			config:{
				name: 'body',
				fieldLabel: 'Mensaje',
				anchor: '90%'
			},
			type:'HtmlEditor',
			filters:{pfiltro:'pltcor.body',type:'string'},
			id_grupo:1,
			grid:true,
			form:true
		},
		{
			config : {
				fieldLabel : 'Archivos Adjunto',
				gwidth : 130,
				inputType : 'file',
				name : 'archivos_adjunto',
				buttonText : '',
				maxLength : 150,
				anchor : '100%',
				
				renderer : function(value, p, record) {
					if (value != '')
						 return String.format('{0}', "<div style='text-align:center'><a href = '../../../sis_empresas/archivos/" + record.data['nombre_archivo'] +  '.' + record.data['extension_archivo'] + "' align='center' width='70' height='70'>documento</a></div>");
				}
			},
			type : 'Field',
			sortable : false,
			id_grupo : 0,
			grid : true,
			form : false
		},/*
		{
			config:{
				name: 'archivos_adjunto',
				fieldLabel: 'Archivos Adjunto',
				allowBlank: true,
				anchor: '80%',
				gwidth: 100,
				maxLength:-5
			},
			type:'TextField',
			filters:{pfiltro:'plcr.archivos_adjunto',type:'string'},
			id_grupo:1,
			grid:true,
			form:true
		},*/
		{
			config:{
				name: 'estado_reg',
				fieldLabel: 'Estado Reg.',
				allowBlank: true,
				anchor: '80%',
				gwidth: 100,
				maxLength:10
			},
			type:'TextField',
			filters:{pfiltro:'plcr.estado_reg',type:'string'},
			id_grupo:1,
			grid:true,
			form:false
		},
		{
			config:{
				name: 'fecha_reg',
				fieldLabel: 'Fecha creación',
				allowBlank: true,
				anchor: '80%',
				gwidth: 100,
						format: 'd/m/Y', 
						renderer:function (value,p,record){return value?value.dateFormat('d/m/Y H:i:s'):''}
			},
			type:'DateField',
			filters:{pfiltro:'plcr.fecha_reg',type:'date'},
			id_grupo:1,
			grid:true,
			form:false
		},
		{
			config:{
				name: 'usr_reg',
				fieldLabel: 'Creado por',
				allowBlank: true,
				anchor: '80%',
				gwidth: 100,
				maxLength:4
			},
			type:'NumberField',
			filters:{pfiltro:'usu1.cuenta',type:'string'},
			id_grupo:1,
			grid:true,
			form:false
		},
		{
			config:{
				name: 'usr_mod',
				fieldLabel: 'Modificado por',
				allowBlank: true,
				anchor: '80%',
				gwidth: 100,
				maxLength:4
			},
			type:'NumberField',
			filters:{pfiltro:'usu2.cuenta',type:'string'},
			id_grupo:1,
			grid:true,
			form:false
		},
		{
			config:{
				name: 'fecha_mod',
				fieldLabel: 'Fecha Modif.',
				allowBlank: true,
				anchor: '80%',
				gwidth: 100,
						format: 'd/m/Y', 
						renderer:function (value,p,record){return value?value.dateFormat('d/m/Y H:i:s'):''}
			},
			type:'DateField',
			filters:{pfiltro:'plcr.fecha_mod',type:'date'},
			id_grupo:1,
			grid:true,
			form:false
		}
	],
	fheight: '80%',
	fwidth: '90%',
	title:'Plantilla Correo',
	ActSave:'../../sis_empresas/control/PlantillaCorreo/insertarPlantillaCorreo',
	ActDel:'../../sis_empresas/control/PlantillaCorreo/eliminarPlantillaCorreo',
	ActList:'../../sis_empresas/control/PlantillaCorreo/listarPlantillaCorreo',
	id_store:'id_plantilla_correo',
	fields: [
		{name:'id_plantilla_correo', type: 'numeric'},
		{name:'estado_reg', type: 'string'},
		{name:'body', type: 'string'},
		{name:'codigo', type: 'string'},
		{name:'nombre_archivo', type: 'string'},
		{name:'extension_archivo', type: 'string'},
		{name:'archivos_adjunto', type: 'string'},
		{name:'fecha_reg', type: 'date',dateFormat:'Y-m-d H:i:s.u'},
		{name:'id_usuario_reg', type: 'numeric'},
		{name:'id_usuario_mod', type: 'numeric'},
		{name:'fecha_mod', type: 'date',dateFormat:'Y-m-d H:i:s.u'},
		{name:'usr_reg', type: 'string'},
		{name:'usr_mod', type: 'string'},
		
	],
	sortInfo:{
		field: 'id_plantilla_correo',
		direction: 'ASC'
	},
	bdel:true,
	bsave:true
	}
)
</script>
		
		