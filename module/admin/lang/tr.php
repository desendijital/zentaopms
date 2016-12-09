<?php
/**
 * The admin module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Sencar Tosun <info@DediTeknoloji.com>
 * @package     admin
 * @version     $Id: tr.php 4460 2016-12-09 12:08:00 +3 dediteknoloji@gmail.com $
 * @link        http://www.zentao.net
 */
$lang->admin->common  = 'Admin';
$lang->admin->index   = 'Index';
$lang->admin->checkDB = 'Veri Tamir et';
$lang->admin->sso     = 'RanZhi Entegrasyon';
$lang->admin->safeIndex = 'Güvenli';
$lang->admin->checkWeak = 'Zayıflık kontrol edin';

$lang->admin->info = new stdclass();
$lang->admin->info->version = 'Sistemin mevcut sürümü %s,';
$lang->admin->info->links   = 'Aşağıdaki bağlantıyı ziyaret edebilirsiniz:';
$lang->admin->info->account = 'Zentao topluluğundaki hesabınız %s. ';

$lang->admin->notice = new stdclass();
$lang->admin->notice->register = "İpucu: ZenTao topluluğuna (www.zentao.net) kayıtlı değilsiniz; %s kayıt olun ve
ZentaoPMS hakkında en son bilgileri edinin.";
$lang->admin->notice->ignore   = "ignore";

$lang->admin->register = new stdclass();
$lang->admin->register->caption    = 'Zentao topluluğuna kaydolun';
$lang->admin->register->click      = 'tıkla';
$lang->admin->register->lblAccount = 'Sayılar ve harfler, en az üç tane';
$lang->admin->register->lblPasswd  = 'Sayılar ve harfler, en az altı';
$lang->admin->register->submit     = 'Kayıt';
$lang->admin->register->bind       = "Topluluk hesabınız varsa, %s ile bağlanın.";
$lang->admin->register->success    = "Kayıt başarılı";

$lang->admin->bind = new stdclass();
$lang->admin->bind->caption = 'Topluluk hesabıyla bağla';
$lang->admin->bind->success = "Başarıyı bağla";

$lang->admin->safe = new stdclass();
$lang->admin->safe->common    = 'Güvenli';
$lang->admin->safe->set       = 'Güçlü şifre girin';
$lang->admin->safe->password  = 'Şifre güçlü';
$lang->admin->safe->weak      = 'Zayıf Şifre';
$lang->admin->safe->reason    = 'Tip';
$lang->admin->safe->checkWeak = 'Zayıf şifre kontrolü';

$lang->admin->safe->modeList[0] = 'Kontrol etme';
$lang->admin->safe->modeList[1] = 'Orta düzey';
$lang->admin->safe->modeList[2] = 'Güçlü';

$lang->admin->safe->reasonList['weak']     = 'Ortak zayıf şifre';
$lang->admin->safe->reasonList['account']  = 'Hesap adı ile aynı';
$lang->admin->safe->reasonList['mobile']   = 'Mobil ile aynı';
$lang->admin->safe->reasonList['phone']    = 'Telefon ile aynı';
$lang->admin->safe->reasonList['birthday'] = 'Doğumgünü ile aynı';

$lang->admin->safe->noticeMode   = 'Sistem giriş yapacak, kullanıcı şifresini yaratacak ve değiştirecek, kullanıcı şifresini kontrol edecektir.';
$lang->admin->safe->noticeStrong = 'Parola uzunluğu ne kadar uzun olursa, harf veya sayıların sayısı veya özel karakterler ne kadar çok olursa, o kadar güvenli olur!';
