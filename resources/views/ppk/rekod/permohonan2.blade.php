@extends('layouts.app')

@section('content')

{{--Progress Bar--}}

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <h4>Penunjuk Kemajuan Permohonan</h4>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
    </div>
</div>


{{--The MAIN table--}}
{{ Form::open(['route' => 'ppk.rekod.permohonan2']) }}
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <table class="table table-bordered">

            <tr>
                <td align="center" colspan="4">
                    <h4>
                        KERTAS PERKIRAAN MARKAH DALAM MELULUSKAN <br />
                        PERMOHONAN PEMBAHAGIAN KEUNTUNGAN <br />
                        {{ Auth::user()->ppk->fullname }} {{ Auth::user()->ppk->name }} <br/>
                        BAGI TAHUN BERAKHIR {{session('tahunBerakhir') }}
                    </h4>
                </td>
            </tr>

            <tr>
                <th width="15">Tahap Asas</th>
                <th width="600">Butir-butir Diperlukan</th>
                <th>Cara Perkiraan</th>
                <th>Markah Diperolehi</th>
            </tr>

            <tr>
                <td>1.</td>
                <td>
                    <p>(a) Baki Wang Tunai Di Tangan Dan Di Bank</p>
                    <p>Pada tarikh Permohonan Dibuat</p>
                    <br/>
                    <table width="100%">
                        <tr>
                            <td>i)</td>
                            <td width="150">Tarikh</td>
                            <td width="15">:</td>
                            <td width="200">{{ date('d-M-Y') }}</td>
                            <td width="35">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>ii)</td>
                            <td>Di Tangan</td>
                            <td>:</td>
                            <td></td>
                            <td valign="middle"> RM </td>
                            <td>{{ Form::number('ditangan', '', ['class' => 'form-control', 'step' => 'any', 'required' => 'true', 'placeholder' => '0.00', 'id' => 'ditangan']) }}</td>
                        </tr>
                        <tr>
                            <td>iii)</td>
                            <td>Di Bank</td>
                            <td>&nbsp;</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><strong>Akaun Semasa</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp; </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>No Akaun</td>
                            <td>:</td>
                            <td>
                                {{ Form::select('semasa1', $semasa, '', ['class' => 'form-control', 'placeholder' => 'Akaun Semasa 1', 'id' => 'semasa1Select']) }}                                

                            </td>
                            <td>RM</td>
                            <td>
                                {{ Form::number('semasa1', '', ['class' => 'form-control', 'step' => 'any', 'required' => 'true', 'placeholder' => '0.00', 'id' => 'semasa1']) }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>No Akaun</td>
                            <td>:</td>
                            <td>
                                {{ Form::select('semasa2', $semasa, '', ['class' => 'form-control', 'placeholder' => 'Akaun Semasa 2', 'id' => 'semasa2Select']) }}                                

                            </td>
                            <td>RM</td>
                            <td>
                                {{ Form::number('semasa2', '', ['class' => 'form-control', 'step' => 'any', 'required' => 'true', 'placeholder' => '0.00', 'id' => 'semasa2']) }}
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>No Akaun</td>
                            <td>:</td>
                            <td>
                                {{ Form::select('semasa3', $semasa, '', ['class' => 'form-control', 'placeholder' => 'Akaun Semasa 3', 'id' => 'semasa3Select']) }}                                

                            </td>
                            <td>RM</td>
                            <td>
                                {{ Form::number('semasa3', '', ['class' => 'form-control', 'step' => 'any', 'required' => 'true', 'placeholder' => '0.00', 'id' => 'semasa3']) }}
                            </td>
                        </tr>



                       

                        {{--Akaun Simpanan--}}
                        <tr>
                            <td>&nbsp;</td>
                            <td><strong>Akaun Simpanan Biasa</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp; </td>
                            <td></td>
                            <td></td>
                        </tr>
                        
                        {{--Gutter--}}
                        <tr><td height="20"></td></tr>
                        {{--Akaun Simpanan Tetap--}}
                        <tr>
                            <td>&nbsp;</td>
                            <td><strong>Akaun Simpanan Tetap</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp; </td>
                            <td></td>
                            <td></td>
                        </tr>
                        
                        {{--Gutter--}}
                        <tr><td height="20"></td></tr>

                        <tr border=1>
                            <th colspan="3"><div align="right">JUMLAH</div></th>
                            <td>&nbsp;</td>
                            <td>RM</td>
                            <td>{{ Form::number('jumlahA', '', ['class' => 'form-control', 'step' => 'any', 'id' => 'jumlahA']) }}</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <p>*</p>
                                <p>(b) Jumlah Pembahagian Keuntungan</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><p>seperti dipohon </p></td>
                            <td align="right">RM </td>
                            <td>{{ Form::number('dipohon', '', ['class' => 'form-control']) }}</td>
                        </tr>  
                        <tr>
                            <td colspan="4">
                                <p>* Jika melebihi satu tahun, jumlahkan keseluruhan<br />
                                Pembahagian Keuntungan bagi tahun-tahun yang <br />
                                berkenaan.</p>
                            </td>
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
                        <tr valign="bottom">
                            <td>&nbsp;</td>
                            <td width="150" valign="middle">(Baki Tunai Ditangan & Bank - Simpanan Ahli & Terimaan Terdahulu)</td>
                            <td width="15" valign="middle" align="center"><strong>-</strong></td>
                            <td width="150" valign="middle">(Jumlah Pembahagian Keuntungan)</td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center" valign="top" style="border-top: 1px solid #CCCCCC">
                                Baki Tunai di Tangan & Bank - Simpanan Ahli & Terimaan Terdahulu
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <table border="0">
                                    <tr>
                                        <td width="15">=</td>
                                        <td width="30" align="right">RM</td>
                                        <td width="100">&nbsp;</td>
                                        <td width="250">
                                            <table>
                                                <tr>
                                                    <td>608,498.08</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: solid 1px #CCCCCC"></td>
                                                </tr>
                                                <tr>
                                                    <td>636,811.67</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td></td>
                        </tr>

                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>

                        {{-- MAIN TABLE - SECOND COLUMN - SECTION B--}}
                        <tr>
                            <td width="25">(b)</td>
                            <td>Keputusan Nisbah :</td>
                            <td colspan="2"><span style="text-decoration: underline; text-decoration-color: #CCCCCC; font-weight: bold">1 : 0.96</span></td>
                        </tr>

                        {{--Gutter--}}
                        <tr height="100">
                            <td>&nbsp;</td>
                        </tr>
                        {{-- MAIN TABLE - SECOND COLUMN - SECTION c--}}
                        <tr>
                            <td>i.</td>
                            <td>Baki W/Tunai</td>
                            <td align="right" colspan="2">{{ Form::number('jumlahI', '' , ['class' => 'form-control', 'id' => 'jumlahI']) }}</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>ii.</td>
                            <td>Simpanan Ahli</td>
                            <td align="right"><div id="jumlahII"></div></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>iii.</td>
                            <td>Terimaan Terdahulu</td>
                            <td align="right"><div id="jumlahIII"></div></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>iv.</td>
                            <td>Jumlah ii + iii</td>
                            <td align="right"><div id="jumlahII_III"></div></td>
                            <td>&nbsp;</td>
                        </tr>

                    </table>
                </td>

                {{--MAIN TABLE - Third Column--}}
                <td valign="bottom" align="center">
                    <table>
                        <tr>
                            <td style="border: 1px solid #CCCCCC">{{ Form::number('markah', 15, ['class' => 'form-control', 'align' => 'center', 'readonly' => 'true']) }}</td>
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
        <div class="pull-right">@include('buttons._next', ['value' => 'Seterusnya'])</div>
    </div>
</div>
{{ Form::close() }}



<script src={{ asset('js/permohonan/permohonan2.js')}}></script>

@stop