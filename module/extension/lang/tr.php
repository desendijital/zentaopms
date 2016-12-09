<?php
/**
 * The extension module en file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Sencar Tosun <info@DediTeknoloji.com>
 * @package     extension
 * @version     $Id$
 * @link        http://www.zentao.net
 */
$lang->extension->common        = 'Uzantılar';
$lang->extension->browse        = 'Liste';
$lang->extension->install       = 'Yükle';
$lang->extension->installAuto   = 'Otomatik Yükle';
$lang->extension->installForce  = 'Güçlü Yükle';
$lang->extension->uninstall     = 'Kaldır';
$lang->extension->activate      = 'Aktif Et';
$lang->extension->deactivate    = 'DeAktif';
$lang->extension->obtain        = 'Elde Et';
$lang->extension->view          = 'Bilgi';
$lang->extension->downloadAB    = 'Aşağı';
$lang->extension->upload        = 'Dosya yükle ve kur';
$lang->extension->erase         = 'Sil';
$lang->extension->upgrade       = 'Uzantıyı Güncelle';
$lang->extension->agreeLicense  = 'Lisansı kabul ediyorum';

$lang->extension->structure   = 'Yapı';
$lang->extension->installed   = 'Yüklü';
$lang->extension->deactivated = 'DeAktif';
$lang->extension->available   = 'Yüklenmiş';

$lang->extension->version     = 'Versiyon';
$lang->extension->compatible  = 'Uyumlu';
$lang->extension->latest      = '<small>Son:<strong><a href="%s" target="_blank" class="extension">%s</a></strong>gerekli zentao <a href="http://api.zentao.net/goto.php?item=latest" target="_blank"><strong>%s</strong></small>';
$lang->extension->author      = 'Üretici';
$lang->extension->license     = 'Lisans';
$lang->extension->site        = 'Site';
$lang->extension->downloads   = 'Yüklenenler';
$lang->extension->compatible  = 'Uyumlu';
$lang->extension->grade       = 'Derece';
$lang->extension->depends     = 'Bağlılık';

$lang->extension->publicList[0] = 'Manuel';
$lang->extension->publicList[1] = 'Otomatik';

$lang->extension->compatibleList[0] = 'Bilinmiyor';
$lang->extension->compatibleList[1] = 'Uyumlu';

$lang->extension->byDownloads   = 'Yüklenenler';
$lang->extension->byAddedTime   = 'Yeni Eklendi';
$lang->extension->byUpdatedTime = 'Son Güncellendi';
$lang->extension->bySearch      = 'Ara';
$lang->extension->byCategory    = 'Kategori ile';

$lang->extension->installFailed            = '%s failed, the reason is:';
$lang->extension->uninstallFailed          = 'Kaldırma başarısız oldu, nedeni :';
$lang->extension->confirmUninstall         = 'Kaldırma, veritabanını silecek veya değiştirecek, Kaldırmaya Emin misiniz?';
$lang->extension->installFinished          = 'Güzel, Eklenti işlemi, %s başarılı.';
$lang->extension->refreshPage              = 'Yenile';
$lang->extension->uninstallFinished        = 'Eklenti başarıyla kaldırıldı.';
$lang->extension->deactivateFinished       = 'Eklenti başarıyla devre dışı bırakıldı.';
$lang->extension->activateFinished         = 'Eklenti başarıyla etkinleştirildi.';
$lang->extension->eraseFinished            = 'Eklenti başarıyla silindi.';
$lang->extension->unremovedFiles           = 'Bazı kaldırılmamış dosyalar var, bunları manuel olarak kaldırmanız gerekiyor';
$lang->extension->executeCommands          = '<h3>Onları düzeltmek için aşağıdaki komutları uygulayın:</h3>';
$lang->extension->successDownloadedPackage = 'Paket dosyasını başarıyla indirdiniz.';
$lang->extension->successCopiedFiles       = 'Dosyalar başarıyla kopyalandı. ';
$lang->extension->successInstallDB         = 'Veritabanı başarı ile kuruldu.';
$lang->extension->viewInstalled            = 'Yüklenmiş eklentileri görüntüleme.';
$lang->extension->viewAvailable            = 'Mevcut eklentileri görüntüleyin';
$lang->extension->viewDeactivated          = 'DeAktif eklentileri görüntüleyin';
$lang->extension->backDBFile               = 'Eklenti-ilişkili veriler yedeklendi şuraya: %s dosyalar!';
$lang->extension->noticeOkFile             = "<h5>Güvenlik nedeniyle, sistemin ZenTao sisteminin yöneticisi olduğunuzu teyit etmesi gerekir.</h5>
    <h5>Lütfen ZenTao sistemine giriş yapın ve  %s dosyasını oluşturun.</h5>
    <p>Not:</p>
    <ol>
    <li>ok.txt dosyasının içeriğini boş tutun.</li>
    <li>Dosya zaten varsa, dosyayı kaldırın ve tekrar yeniden oluşturun.</li>
    </ol>"; 

$lang->extension->upgradeExt     = 'Güncelle';
$lang->extension->installExt     = 'Yükle';
$lang->extension->upgradeVersion = '(Güncelle %s den %s ya)';

$lang->extension->waring = 'Dikkat-Uyarı';

$lang->extension->errorOccurs                  = 'Hata:';
$lang->extension->errorGetModules              = "www.ZenTao.net adresinden eklenti kategori verilerini alma başarısız oldu. ";
$lang->extension->errorGetExtensions           = 'www.ZenTao.net adresinden uzantılar alınamadı. Uzantılarınızı bulmak için <a href="http://www.ZenTao.net/extension/" target="_blank">www.ZenTao.net</a> i Ziyaret edebilirsiniz. El ile indirin ve kurmak için ZenTaoPMS a dosyaları yükleyin.';
$lang->extension->errorDownloadPathNotFound    = 'Paket dosyasının kayıt yolu <strong>%s</strong>mevcut değil.<br />Linux kullanıcıları için, çalıştırabilirsiniz şunu <strong>mkdir -p %s</strong> ve düzelecektir.';
$lang->extension->errorDownloadPathNotWritable = 'Paket dosyasının kayıt yolu <strong>%s</strong> yazılamıyor.<br />
Linux kullanıcıları için, çalıştırabilirsiniz şunu: <strong>sudo chmod 777 %s</strong> ve düzelecektir.';
$lang->extension->errorPackageFileExists       = 'Aynı isimli bir dosya zaten var<strong>%s</strong>.<h5> Eğer isterseniz %s tekrar, <a href="%s">Lütfen bu bağlantıyı tıklayın</a>.</h5>';
$lang->extension->errorDownloadFailed          = 'Dosya indirme başarısız, Lütfen tekrar deneyin. Veya elle indirin. Dosyayı sisteme yükleyin ve kurun.';
$lang->extension->errorMd5Checking             = 'Dosya indirme kontrolü başarısız oldu. Lütfen elle indirin ve dosyayı sisteme yükleyin ve kurun.';
$lang->extension->errorExtracted               = 'Paketli dosya<strong> %s </strong> açma hatası. Hata:<br />%s';
$lang->extension->errorCheckIncompatible       = 'Bu uzantı geçerli zentao sürümü ile uyumlu değil. <h3>Yapmalısınız <a href="%s">Güçlü %s</a> veya <a href="#" onclick=parent.location.href="%s">Vazgeç</a></h3>.';
$lang->extension->errorFileConflicted          = 'Çakışan bazı dosyalar var: <br />%s <h3>You can <a href="%s">Overide them</a> or <a href="#" onclick=parent.location.href="%s">Cancel</a></h3>.';
$lang->extension->errorPackageNotFound         = 'Paketli dosya <strong>%s </strong> yok, Belki de indirme başarısız oldu, tekrar deneyin.';
$lang->extension->errorTargetPathNotWritable   = 'Hedef yol path <strong>%s </strong>yazılamıyor.';
$lang->extension->errorTargetPathNotExists     = 'Hedef yol path <strong>%s </strong>yok';
$lang->extension->errorInstallDB               = 'Veritabanınada çalıştırılan sql hata verdi, Hata: %s';
$lang->extension->errorConflicts               = 'Eklenti ile "%s" çakışıyor!';
$lang->extension->errorDepends                 = 'Aşağıdaki eklentiye gerekli bağlı-eklenti yüklü değil veya sürüm yanlış:<br /><br /> %s';
$lang->extension->errorIncompatible            = 'Eklenti ZenTao sisteminize uyumsuz sürümde';
$lang->extension->errorUninstallDepends        = 'Eklenti "%s" başka bir eklentiye bağlı, Kaldırılamıyor';
