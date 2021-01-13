<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">          
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">File</li>
        </ol>
    </div><!--/.row-->
 
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Daftar File</h1>
        </div>
    </div><!--/.row-->
 
 
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Tabel Daftar File <a class="btn btn-info" style="float: right;" href="index.php?m=tambah-file">Tambah </a></div>
                <div class="panel-body">
                    <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th data-checkbox="true">Item ID</th>
                                <th data-sortable="true">No.</th>
                                <th data-sortable="true">Judul</th>
                                <th data-sortable="true">Keterangan</th>
                                <th data-sortable="true">File</th>
                                <th data-sortable="true">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            $koneksi = "SELECT * from tbl_file order by file_id desc" ;
                            $query  = mysqli_query($db,$koneksi);
                            while($data=mysqli_fetch_array($query))
                            {
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['file_judul']; ?></td>
                                    <td><?php echo substr($data['file_keterangan'], 0, 50); ?></td>
                                    <td><?php echo $data['file_nama']; ?></td>
                                    <td>
                                        <a class="btn btn-xs btn-success" href="index.php?m=ubah-file&id=<?php echo $data['file_id']; ?>">Ubah</a>
                                        <a class="btn btn-xs btn-danger" href="index.php?m=hapus-file&id=<?php echo $data['file_id']; ?>" onclick="return confirm('Yakin mau di hapus?');">Hapus</a>
                                        <a class="btn btn-xs btn-info" href="file/<?php echo $data['file_nama']; ?>">Download</a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row--> 
   
 
</div><!--/.main-->