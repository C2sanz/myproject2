@extends("layout.main")

@section("title","teacher")

@section("content")
        <table class="table table-striped">
          <thead>
            <tr>
        			<th>#</th>
              <th>ชื่อสกุล</th>
              <th>รายละเอียด</th>
        		</tr>
          </thead>
        	<tbody>
            <tr>
        			<td>1</td>
        			<td>อาจารย์สุนี ปัญจะเทวคุปก์ </td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            <tr>
        			<td>2</td>
        			<td>อาจารย์วิวัฒน์ ชินนาทศิริกุล์</td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            <tr >
        			<td>3 </td>
        			<td>อาจารย์ดาวรถา วีระพันธ์</td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            <tr>
        			<td>4</td>
        			<td>อาจารย์ณัฎฐิรา ศุขไพบูลย์์</td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            <tr>
        			<td>5 </td>
              <td>อาจารย์ประณมกร อัมพรพรรดิ์</td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            <tr>
        			<td>6 </td>
        			<td>อ่าจารย์วิศรุต ขวัญคุ้ม</td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            <tr>
        			<td>7 </td>
        			<td>อาจารย์ณัฐรดี อนุพงค์ </td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            <tr>
        			<td>8 </td>
        			<td>อาจารย์ชวลิต โควีระวงศ์</td>
        			<td><a href="#">คลิก</a></td>
        		</tr>

        	</tbody>
        </table>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
          @endsection
