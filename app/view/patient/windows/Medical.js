/**
 * GaiaEHR (Electronic Health Records)
 * Copyright (C) 2013 Certun, LLC.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

Ext.define('App.view.patient.windows.Medical', {
	extend: 'App.ux.window.Window',
	title: i18n('medical_window'),
	itemId: 'MedicalWindow',
	layout: 'fit',
	closeAction: 'hide',
	height: 700,
	width: 1200,
	bodyStyle: 'background-color:#fff',
	modal: true,
	requires: [
		'App.view.patient.Results',
		'App.view.patient.Referrals',
		'App.view.patient.Immunizations',
		'App.view.patient.Medications',
		'App.view.patient.ActiveProblems',
		'App.view.patient.SocialHistory',
		'App.view.patient.Allergies'
	],

	initComponent: function(){
		var me = this;

		me.items = [
			{
				xtype:'tabpanel',
				border:false,
				bodyBorder:false,
				plain: true,
				margin: 5,
				items:[
					{
						xtype:'patientimmunizationspanel',
						itemId: 'immunization'
					},
					{
						xtype: 'patientallergiespanel',
						itemId: 'allergies'
					},
					{
						xtype: 'patientactiveproblemspanel',
						itemId: 'activeproblems'
					},
					{
						xtype:'patientmedicationspanel',
						itemId: 'medications'
					},
					{

						xtype:'patientresultspanel',
						itemId: 'laboratories'
					},
					{
						xtype: 'patientsocialhistorypanel',
						itemId: 'socialhistory'
					},
					{
						xtype: 'patientreferralspanel',
						itemId: 'referrals'
					}
				]
			}
		];

		me.buttons = [
			{
				text: i18n('close'),
				scope: me,
				handler: function(){
					me.close();
				}
			}
		];

		me.listeners = {
			scope: me,
			close: me.onMedicalWinClose
		};

		me.callParent(arguments);
	},

	cardSwitch:function(action){
		var me = this,
			tabPanel = me.down('tabpanel'),
			panel = tabPanel.query('#' + action)[0];

		tabPanel.setActiveTab(panel);
		me.setWindowTitle(panel.title);
	},

	setWindowTitle:function(title){
		this.setTitle(app.patient.name + ' (' + title + ') ' + (app.patient.readOnly ? '-  <span style="color:red">[Read Mode]</span>' :''));
	},

	onMedicalWinClose: function(){
		if(app.getActivePanel().$className == 'App.view.patient.Summary'){
			app.getActivePanel().loadStores();
		}
	}
});