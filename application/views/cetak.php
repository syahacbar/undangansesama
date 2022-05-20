<?php
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
      $pdf->SetTitle('Undangan Calon Mahasiswa Baru Jalur SESAMA UNIPA '.date("Y"));
      $pdf->SetPrintHeader(false);
      $pdf->SetPrintFooter(false);
      		$pdf->SetMargins(25, 30, 20);
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAuthor('Author');
      $pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
                $html='

<table border="0" cellspacing=0 cellpadding=0>
	<tr>
		<td rowspan="5" width="15%"><img src="'.base_url().'/assets/unipa-warna.png" width="70" height="70"></td>
		<td align="center" width="75%"><font style="font-family:times" size="14"><b>KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI</b></font></td>
		<td rowspan="5" width="10%"></td>
	</tr>
	<tr>
		<td align="center"><font style="font-family:times" size="14"><b>UNIVERSITAS PAPUA</b></font></td>
	</tr>
	<tr>
		<td align="center"><font style="font-family:times" size="14"><b>MANOKWARI</b></font></td>
	</tr>
	<tr>
		<td align="center"><font style="font-family:times" size="10">JL. Gunung Salju Amban Manokwari-Papua Kode Pos 98314</font></td>
	</tr>
	<tr>
		<td align="center"><font style="font-family:times" size="10">Website: https://unipa.ac.id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; https://bpak.unipa.ac.id</font></td>
	</tr>
</table>
<hr style="border-width: 3px;">
<font style="font-family:times" size="12">
<table border="0">
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td width="15%">Nomor</td>
		<td cellpadding="5" width="70%" align="left">: '.$nomorundangan.' </td>
		<td width="15%" align="right">'.$tglundangan.'</td>
	</tr>
	<tr>
		<td width="15%">Perihal</td>
		<td width="70%" align="left" colspan="2">: '.$perihalundangan.'</td>
		<td width="15%" align="left" colspan="2"></td>
	</tr>
</table>
<br><br><br><br>
Kepada <br>
<b>'.strtoupper($pesertum['namapendaftar']).'<br>'.strtoupper($pesertum['asalslta']).'</b><br>
di Tempat.
<--!
<table border="0">
	<tr>
		<td width="10%" align="left">Kepada</td>
		<td width="90%" align="left"><b>'.strtoupper($pesertum['namapendaftar']).'</b></td>
	</tr>
	<tr>
		<td width="10%"></td>
		<td width="90%" align="left"><b>'.strtoupper($pesertum['asalslta']).'</b></td>
	</tr>
	<tr>
		<td width="10%"></td>
		<td width="90%" align="left">di Tempat.</td>
	</tr>
</table>
-->
<br><br>
<p style="text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp; Berdasarkan Surat Keputusan Rektor Universitas Papua No: '.$nomorsk.' maka, Rektor Universitas Papua  mengundang Saudara/i Sebagai Calon Mahasiswa Baru pada:</p>

<table border="0">
	<tr>
		<td width="20%">Fakultas</td>
		<td width="80%">: <b>'.strtoupper($pesertum['namafakultas']).'</b></td>
	</tr>
	<tr>
		<td width="20%">Program Studi</td>
		<td width="80%">: <b>'.strtoupper($pesertum['namaprodi']).'</b></td>
	</tr>
	<tr>
		<td width="20%">No. Peserta</td>
		<td width="80%">: <b>'.$pesertum['nopendaftar'].'</b></td>
	</tr>
</table>
<p style="text-align:justify">Selanjutnya Saudara/i diwajibkan untuk melakukan registrasi ke Universitas Papua pada Tanggal <b>'.$tglregist.'.</b> Saudara/i harap memperhatikan Surat Pengumuman Rektor Nomor : '.$nopengumuman.' tentang Prosedur Registrasi lulusan SESAMA-UNIPA Tahun '.date("Y").' di website/laman: <font style="text-decoration: underline;color:blue">https://bpak.unipa.ac.id/</font>. Apabila Saudara/i tidak mendaftar ulang pada waktu yang telah ditentukan, maka Saudara/i <b><u>“DINYATAKAN GUGUR/MENGUNDURKAN DIRI”.</u></b> </p>
<p>Demikian untuk diperhatikan.</p>
</font>
<table border="0">
	<tr>
		<td width="60%"></td>
		<td width="40%" align="center"><img src="http://bpak.unipa.ac.id/undangansesama/assets/ttdbidakademik.jpg" width="200"></td>
	</tr>
</table>';
      $pdf->writeHTML($html, true, false, true, false, '');
			ob_end_clean();
			$pdf->Output('Undangan Sesama - '.$pesertum['nopendaftar'].'.pdf', 'I');
?>