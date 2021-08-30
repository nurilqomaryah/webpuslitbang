@extends('layoutuser')

@section('main')

<div class="container" style="padding-top: 20px; padding-bottom: 60px;">
        <div class="col-md-6">
            <h3>Hubungi Kami</h3>
            <p style="text-align: justify">Untuk masyarakat (non-pegawai BPKP) yang ingin meminta hasil Litbang, Anda dapat mengajukan permintaan melalui tautan berikut:</p>
            <a href="https://eos.bpkp.go.id/ppid/public/">https://eos.bpkp.go.id/ppid/public/</a>
        <!--    <a href="files/Form Permintaan Hasil Litbang.docx">Form Permintaan Hasil Litbang</a> -->
            <div style="border-bottom: 5px solid #FFA500; padding-top: 2em;"></div>
            &nbsp;
            <p style="text-align: justify">Jika Anda memiliki pertanyaan, saran, atau komentar terkait Puslitbangwas, Anda dapat mengisi form di bawah ini.</p>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukan Email" />
                    </div>
                    <div class="form-group">
                        <label>Keterangan:</label>
                        <textarea class='form-control' rows="10" placeholder="Masukan Keterangan"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                </form>
        </div>
        <div class="col-md-6">
            <h3>Lokasi Kami</h3>
            <p>
                BPKP Perwakilan Provinsi DKI Jakarta Lantai 4 <br>
                Jalan Pramuka No. 33 Jakarta Timur, 13120
            </p>
            <p> </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5370991402847!2d106.87012471478356!3d-6.19263319551689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4f39c91fb37%3A0x973df16590d2b772!2sBPKP%20Representative%20Of%20DKI%20Jakarta%20Province!5e0!3m2!1sen!2sid!4v1622360796864!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
</div>
@endsection
