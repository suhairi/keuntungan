@extends('layouts.app')

@section('content')

{{--Progress Bar--}}

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <h4>Penunjuk Kemajuan Permohonan...</h4>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete</span>
            </div>
        </div>
    </div>
</div>


{{--The MAIN table--}}
{{ Form::model($lampiranlima, ['route' => 'ppk.rekod.permohonan5']) }}
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <table class="table table-bordered">

            <tr>
                <th width="15">Tahap Asas</th>
                <th width="600">Butir-butir Diperlukan</th>
                <th>Cara Perkiraan</th>
                <th>Markah Diperolehi</th>
            </tr>

            <!-- ###########################################     6      ############################################## -->

            <tr>
                <td>6.</td>
                <td>
                    <p>Kedudukan Akaun Keuntungan / (Kerugian Terkumpul)</p>
                    <p>(Rujuk Kepada Kunci Kira-kira Beraudit Yang Terakhir</p>
                    <br/>
                    <table width="100%" border=0>

                        <tr>
                            <td colspan="2" width=400>Keuntungan / (Kerugian Terkumpul )</td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('untungrugi', $lampiranlima->untungrugi, ['class' => 'form-control', 'id' => 'untungRugi', 'required', 'placeholder' => '0.00'])}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" width=400>Jumlah Keuntungan Bersih</td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('untungBersih', $lampiranbdua->untungBersih, ['class' => 'form-control', 'id' => 'untungBersih', 'required', 'readonly', 'placeholder' => '0.00'])}}</td>
                        </tr>

                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>


                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>{{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>                       

                    </table>
                </td>

                {{--MAIN TABLE - Second Column--}}
                <td>
                    <table width="100%" border="0">
                        <tr>
                            <td width="25">(a)</td>
                            <td>Menggunakan tiga (3) kaedah : <br /></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr valign="top">
                            <td>&nbsp;</td>
                            <td width="150" valign="top">
                                Keuntungan / (Kerugian Terkumpul) <br /><br />
                                <u>Campur/(Tolak)</u> Keuntungan Tahun Semasa
                            </td>
                            <td width="15" valign="top" align="center"><strong>&nbsp;&nbsp;</strong></td>
                            <td width="150" valign="top" border="1">
                                <table border="1" width="100%">
                                    <tr>
                                        <td colspan="3" align="center"><strong>Kaedah</strong></td>
                                    </tr>
                                    <tr>
                                        <td align="center">(a)<br /></td>
                                        <td align="center">(b)</td>
                                        <td align="center">(c)</td>
                                    </tr>
                                    <tr>
                                        <td align="center">(+)<br /></td>
                                        <td align="center">(-)</td>
                                        <td align="center">(-)</td>
                                    </tr>
                                    <tr>
                                        <td align="center">(+)<br /></td>
                                        <td align="center">(+)</td>
                                        <td align="center">(+)</td>
                                    </tr>
                                    <tr>
                                        <td align="center"><strong>(+)</strong></td>
                                        <td align="center"><strong>(+)</strong></td>
                                        <td align="center"><strong>(-)</strong></td>
                                    </tr>

                                </table>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" align="left" valign="top">
                                <br />
                                Nota : <br />
                                Tanda (+) = Amaun Keuntungan <br />
                                Tanda (-) = Amaun Kerugian
 
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>                        

                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>

                        {{-- MAIN TABLE - SECOND COLUMN - SECTION B--}}
                        <tr>
                            <td width="25">(b)</td>
                            <td colspan="3">
                                <div id="keputusan">Keputusan : </div>
                            </td>
                            
                        </tr>                        

                    </table>
                </td>

                {{--MAIN TABLE - Second Row --}}
                <td valign="bottom" align="center">
                    <table>
                        <tr>
                            <td style="border: 1px solid #CCCCCC">{{ Form::number('markah1', '', ['class' => 'form-control', 'align' => 'center', 'readonly' => 'true', 'id' => 'markah1', 'placeholder' => '0']) }}</td>
                        </tr>
                    </table>                    
                </td>
            </tr>

            <!-- #############################################    spaces/gutter    ######################################### -->
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                {{--MAIN TABLE - Second Column--}}
                <td><strong>Jumlah</strong></td>
                <td align="center">50</td>
            </tr>

            <!-- #############################################    7    ######################################### -->

            <tr>
                <td>7.</td>
                <td>
                    <p>Memastikan PP : </p>
                    <br/>
                    <ol type="i">
                    <li>Telah mengagihkan pembahagian dividen dan hadiah di atas langganan yang telah diluluskan oleh Pendaftar sebelum ini. </li>
                    <li>Mendapat audit tidak bersyarat.</li>
                    <li>Penggunaan purata kumpulan wang sebanyak 60% yang telah diluluskan oleh Pendaftar sebelum ini.</li>
                    <li>Keuntungan bersih setelah ditolak kos dibantu.</li>
                    </ol>
                </td>
                {{--MAIN TABLE - Second Column--}}
                <td>
                    <table width="100%" border="0">
                        <tr>
                            <td width="25" colspan="2">Menggunakan kaedah : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= date('d - M - y'); ?></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="25" valign="top">(a)</td>
                            <td>Peruntukan pembahagian dividen berbaki atau tidak</td>
                            <td>&nbsp;</td>
                            <td valign="top">{{ Form::number('7a', '', ['class' => 'form-control', 'step' => 'any', 'align' => 'center', 'id' => '7a', 'placeholder' => '0.00', 'required']) }}</td>
                        </tr>
                        <tr>
                            <td width="25" valign="top">(b)</td>
                            <td>Peruntukan rebat atas langganan berbaki atau tidak</td>
                            <td>&nbsp;</td>
                            <td valign="top">{{ Form::number('7b', '', ['class' => 'form-control', 'step' => 'any', 'align' => 'center', 'id' => '7b', 'placeholder' => '0.00', 'required']) }}</td>
                        </tr>
                        <tr>
                            <td width="25" valign="top">(c)</td>
                            <td>Laporan audit (Bersyarat / Tidak Bersyarat)</td>
                            <td>&nbsp;</td>
                            <td valign="top">{{ Form::select('7c', ['1' => 'BERSYARAT', '2' => 'TIDAK BERSYARAT'], '', ['class' => 'form-control', 'align' => 'center', 'id' => '7c', 'placeholder' => 'Teguran Audit', 'required']) }}</td>
                        </tr>
                        <tr>
                            <td width="25" valign="top">(d)</td>
                            <td>Penggunaan purata keseluruhan kumpulan wang sebanyak 60% </td>
                            <td>&nbsp;</td>
                            <td valign="top">{{ Form::number('7d', '', ['class' => 'form-control', 'step' => 'any', 'align' => 'center', 'id' => '7d', 'placeholder' => '0.00', 'required']) }}</td>
                        </tr> 

                        <tr>
                            <td width="25" valign="top">(e)</td>
                            <td>Keuntungan bersih setelah ditolak kos dibantu</td>
                            <td>&nbsp;</td>
                            <td valign="top"></td>
                        </tr>
                        <tr>
                            <td width="25" valign="top">&nbsp;</td>
                            <td>- Keuntungan Semasa</td>
                            <td>&nbsp;</td>
                            <td valign="top">{{ Form::number('7e1', '', ['class' => 'form-control', 'step' => 'any', 'align' => 'center', 'id' => '7e1', 'placeholder' => '0.00', 'readonly', 'required']) }}</td>
                        </tr>
                        <tr>
                            <td width="25" valign="top">&nbsp;</td>
                            <td>- Kos dibantu</td>
                            <td>&nbsp;</td>
                            <td valign="top">{{ Form::number('7e2', '', ['class' => 'form-control', 'step' => 'any', 'align' => 'center', 'id' => '7e2', 'placeholder' => '0.00', 'required']) }}</td>
                        </tr>
                        <tr>
                            <td width="25" valign="top">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td valign="top" align="center" style="border-top: 1px solid #000000; border-bottom-style: double">
                                <div id="jumlah7e">RM 0.00</div>
                            </td>
                        </tr>



                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>

                        {{-- MAIN TABLE - SECOND COLUMN - SECTION B--}}
                        <tr>
                            <td width="25">(b)</td>
                            <td>Keputusan Nisbah :</td>
                            <td colspan="2">
                                <span style="text-decoration: underline; text-decoration-color: #CCCCCC; font-weight: bold"><div id="nisbah3"></div></span>
                            </td>
                        </tr>
                        {{-- 3 Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table> 

                    <td valign="bottom" align="center">
                    <table border="0">
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="125" valign="top">
                                {{ Form::number('markah2', '', ['class' => 'form-control', 'align' => 'center', 'readonly' => 'true', 'id' => 'markah2', 'placeholder' => '0']) }}
                            </td>                  
                        </tr>
                        <tr>
                            <td width="125" valign="top">
                                {{ Form::number('markah3', '', ['class' => 'form-control', 'align' => 'center', 'readonly' => 'true', 'id' => 'markah3', 'placeholder' => '0']) }}
                            </td>                  
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td width="125" valign="top">
                                {{ Form::number('markah4', '', ['class' => 'form-control', 'align' => 'center', 'readonly' => 'true', 'id' => 'markah4', 'placeholder' => '0']) }}
                            </td>                  
                        </tr>
                        <tr>
                            <td width="125" valign="top">
                                {{ Form::number('markah5', '', ['class' => 'form-control', 'align' => 'center', 'readonly' => 'true', 'id' => 'markah5', 'placeholder' => '0']) }}
                            </td>                  
                        </tr>
                        <tr>
                            <td width="125" valign="top">&nbsp;</td>                  
                        </tr>
                        <tr>
                            <td width="125" valign="top">&nbsp;</td>                  
                        </tr>
                        <tr>
                            <td width="125" valign="top">&nbsp;</td>                  
                        </tr>
                        <tr>
                            <td width="125" valign="top">&nbsp;</td>                  
                        </tr>

                        <tr>
                            <td width="125" valign="top">
                                {{ Form::number('markah6', '', ['class' => 'form-control', 'align' => 'center', 'readonly' => 'true', 'id' => 'markah6', 'placeholder' => '0']) }}
                            </td>                  
                        </tr>



                    </table>                    
                </td>
            </tr>
        </table>
    </div>
    <div class="col-xs-1">&nbsp;</div>
</div>


<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <div class="pull-left"><a href="{{ redirect()->back() }}">@include('buttons._previous', ['value' => 'Kembali'])</a></div>
        <div class="pull-right">
            <input class="btn btn-success" type="submit" value="Seterusnya" />
        </div>
    </div>
</div>
{{ Form::close() }}



<script src={{ asset('js/permohonan/permohonan5_.js')}}></script>

@stop