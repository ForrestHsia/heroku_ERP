@extends('layouts.calendar_navi')

@section('title','住房管理')


@section('content')
<main id="index">
<div>
    <div id="b">月份住房紀錄</div>
    <table width="100%" class="calendar">
    <tr>
        <td width="16%">日、Sun</td>
        <td width="14%">一、Mon</td>
        <td width="14%">二、Feb</td>
        <td width="14%">三、Wed</td>
        <td width="14%">四、Thu</td>
        <td width="14%">五、Fri</td>
        <td width="14%">六、Sat</td>
    </tr>
    @f
    </table>
</div>


@endsection


