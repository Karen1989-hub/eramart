<table>
    <thead>
    <tr>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Մարզիչ</th>
        <th>Մարզիկի քաշը</th>
        <th>Քաշաին կարգը</th>
        <th>1-ին մարզ. 1-ին մոտ.</th>
        <th>1-ին մարզ. 2-րդ մոտ.</th>
        <th>1-ին մարզ. 3-րդ մոտ.</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($marziks as $val)
        <tr>
            <td>{{ $val->name }}</td>
            <td>{{ $val->lastName }}</td>
            <td>{{ $val->coachName }}</td>
            <td>{{ $val->weight }}</td>
            <td>{{ $val->weightClass }}</td>
            <td>{{ $val->v1_1m }}</td>
            <td>{{ $val->v1_2m }}</td>
            <td>{{ $val->v1_3m }}</td>


        </tr>
    @endforeach
    </tbody>
</table>

