<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {
	function grafik()
	{
		//Visual 1

		$chartData=file_get_contents('assets/visual1.json');
		$chartData=json_decode($chartData);
		$res=array();
		foreach ($chartData as $row) {
			$dat=[$row->status,(double)$row->jumlah];
			array_push($res, $dat);
		}
		 
		$data['PieChartData']=json_encode($res);
		$data['PieChartTitle']='Jumlah Instansi Sekolah Bandung';
		 
		//Visual 2 
		 
		$chartData1=file_get_contents('assets/visual2.json');
		$chartData1=json_decode($chartData1);
		$res1=array();
		foreach ($chartData1 as $row) {
			$dat1=[$row->TINGKATAN,(double)$row->Negeri,(double)$row->Swasta];
			array_push($res1, $dat1);
		}
		
		$data['BarChartData1']=json_encode($res1);
		$data['BarChartTitle1']='Jumlah Instansi Sekolah Bandung';

		//Visual 5
		
		$chartData2=file_get_contents('assets/visual5.json');
		$chartData2=json_decode($chartData2);
		$res2=array();
		foreach ($chartData2 as $row) {
			$dat2=[$row->KECAMATAN,(double)$row->SD,(double)$row->SLTP,(double)$row->SMK,(double)$row->SMU];
			array_push($res2, $dat2);
		}
		
		$data['BarChartData2']=json_encode($res2);
		$data['BarChartTitle2']='Perbandingan Instansi Pendidikan Per Kecamatan';
		
		//Visual 4

		$chartData3=file_get_contents('assets/visual4.json');
		// echo json_encode($chartData3);
		$chartData3=json_decode($chartData3);
		$res3=array();
		foreach ($chartData3 as $row) {
			$dat3=[$row->TINGKATAN,(double)$row->JUMLAH];
			array_push($res3, $dat3);
		}
		
		$data['BarChartData3']=json_encode($res3);
		$data['BarChartTitle3']='Perbandingan Tingkatan Instansi Pendidikan';
		//Visual 3
		
		$chartData4=file_get_contents('assets/visual3.json');
		$chartData4=json_decode($chartData4);
		$res4=array();
		foreach ($chartData4 as $row) {
			$dat4=[$row->TINGKATAN,(float)$row->SD,(float)$row->SLTP,(float)$row->SMK,(float)$row->SMU];
			array_push($res4, $dat4);
		}
		
		$data['BarChartData4']=json_encode($res4);
		$data['BarChartTitle4']='Grafik Peningkatan Instansi Sekolah Per Tahun';
		

		
		 $this->load->view('Grafik',$data);
		
		 
	}

 }