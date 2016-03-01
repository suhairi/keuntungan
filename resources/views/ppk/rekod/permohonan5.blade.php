@extends('layouts.app')

@section('content')

{{--Progress Bar--}}

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <h4>Penunjuk Kemajuan Permohonan</h4>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete</span>
            </div>
        </div>
    </div>
</div>


{{--The MAIN table--}}
{{ Form::open(['route' => 'ppk.rekod.permohonan5']) }}
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <table class="table table-bordered">

            <tr>
                <th width="15">Tahap Asas</th>
                <th width="600">Butir-butir Diperlukan</th>
                <th>Cara Perkiraan</th>
                <th>Markah Diperolehi</th>
            </tr>

            <!-- ###########################################     3       ############################################## -->

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
                            <td>{{ Form::number('untungrugi', '', ['class' => 'form-control', 'id' => 'untungrugi', 'required', 'placeholder' => '0.00'])}}</td>
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
                                Keputusan : &nbsp;&nbsp;&nbsp;&nbsp;<div id="kaedah"></div> <div id="jumlah"></div>
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

            <!-- #############################################    4    ######################################### -->
            <tr>
                <td>here 1</td>
                <td>
                    here 2
                </td>
                {{--MAIN TABLE - Second Column--}}
                <td>Jumlah</td>
                <td>50</td>
            </tr>

            <!-- #############################################    5    ######################################### -->

            <tr>
                <td>5.</td>
                <td>
                    <p>(a) Perbezaan Akaun Bagi Akaun Akan Terima <br />(Rujuk Laporan Audit)</p>
                    <br/>
                    <table width="100%" border=0>

                        <tr>
                            <td colspan="2" width=400>Jumlah Tanggungan</td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('jumlah_tanggungan', '', ['class' => 'form-control', 'id' => 'jumlah_tanggungan', 'required', 'placeholder' => '0.00'])}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" width=400>Jumlah Harta</td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('jumlah_harta', '', ['class' => 'form-control', 'id' => 'jumlah_harta', 'required', 'placeholder' => '0.00'])}}</td>
                        </tr>

                    </table>
                </td>
                {{--MAIN TABLE - Second Column--}}
                <td>
                    <table width="100%" border="0">
                        <tr>
                            <td width="25">(a)</td>
                            <td>Nisbah Digunakan : </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr valign="bottom">
                            <td>&nbsp;</td>
                            <td width="150" valign="middle" align="center">Jumlah Tanggungan</td>
                            <td width="15" valign="middle" align="center" rowspan="2"><strong>=</strong></td>
                            <td width="150" valign="middle" align="center"><div id="jumlahAtas3"></div></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td width="150" valign="middle" align="center" style="border-top: 1px solid #CCCCCC">Jumlah Semasa</td>
                            <td colspan="4" align="center" valign="top" style="border-top: 1px solid #CCCCCC"><div id="jumlahBawah3"></div></td>
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
                    <table>
                        <tr>
                            <td style="border: 1px solid #CCCCCC">{{ Form::number('markah3', '', ['class' => 'form-control', 'align' => 'center', 'readonly' => 'true', 'id' => 'markah3', 'placeholder' => '0']) }}</td>
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



<script src={{ asset('js/permohonan/permohonan4.js')}}></script>

@stop