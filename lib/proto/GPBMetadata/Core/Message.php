<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/message.proto

namespace GPBMetadata\Core;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Core\Plugin::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa20f0a12636f72652f6d6573736167652e70726f746f1204636f726522" .
            "1d0a0d4e6f746963654d657373616765120c0a04626f6479180120012809" .
            "2298010a105765624e6f746963654d657373616765120c0a04636f646518" .
            "0120012809120e0a06686569676874180220012805120f0a076872656655" .
            "524c180320012809120d0a057469746c6518042001280912100a08706c75" .
            "67696e496418052001280512340a116a756d70506c7567696e50726f6669" .
            "6c6518072001280b32192e636f72652e53696d706c65506c7567696e5072" .
            "6f66696c65221b0a0b546578744d657373616765120c0a04626f64791801" .
            "20012809223a0a0c496d6167654d657373616765120b0a0375726c180120" .
            "012809120d0a057769647468180220012805120e0a066865696768741803" .
            "2001280522290a0c417564696f4d657373616765120b0a0375726c180120" .
            "012809120c0a0474696d6518022001280522a1010a0a5765624d65737361" .
            "6765120c0a04636f6465180120012809120d0a0577696474681802200128" .
            "05120e0a06686569676874180320012805120f0a076872656655524c1804" .
            "20012809120d0a057469746c6518052001280912100a08706c7567696e49" .
            "6418062001280512340a116a756d70506c7567696e50726f66696c651807" .
            "2001280b32192e636f72652e53696d706c65506c7567696e50726f66696c" .
            "65223a0a0f446f63756d656e744d657373616765120b0a0375726c180120" .
            "012809120c0a0473697a65180220012805120c0a046e616d651803200128" .
            "0922290a0c566964656f4d657373616765120b0a0375726c180120012809" .
            "120c0a0474696d65180220012805222c0a0d526563616c6c4d6573736167" .
            "65120d0a056d73674964180120012809120c0a0474657874180220012809" .
            "22520a0d5374617475734d657373616765120d0a056d7367496418012001" .
            "280912230a0673746174757318022001280e32132e636f72652e4d657373" .
            "616765537461747573120d0a05697352657118032001280822100a0e5379" .
            "6e63456e644d65737361676522f8040a074d657373616765120d0a056d73" .
            "67496418012001280912120a0a66726f6d55736572496418022001280912" .
            "0f0a07706f696e74657218032001280312120a0a74696d65536572766572" .
            "18042001280312270a08726f6f6d5479706518052001280e32152e636f72" .
            "652e4d657373616765526f6f6d5479706512120a08746f55736572496418" .
            "0620012809480012130a09746f47726f757049641807200128094800121f" .
            "0a047479706518082001280e32112e636f72652e4d657373616765547970" .
            "6512210a047465787418092001280b32112e636f72652e546578744d6573" .
            "73616765480112230a05696d616765180a2001280b32122e636f72652e49" .
            "6d6167654d657373616765480112230a05617564696f180b2001280b3212" .
            "2e636f72652e417564696f4d6573736167654801121f0a03776562180c20" .
            "01280b32102e636f72652e5765624d657373616765480112250a06737461" .
            "747573180d2001280b32132e636f72652e5374617475734d657373616765" .
            "480112250a066e6f74696365180e2001280b32132e636f72652e4e6f7469" .
            "63654d6573736167654801122b0a097765624e6f74696365180f2001280b" .
            "32162e636f72652e5765624e6f746963654d657373616765480112290a08" .
            "646f63756d656e7418102001280b32152e636f72652e446f63756d656e74" .
            "4d657373616765480112230a05766964656f18112001280b32122e636f72" .
            "652e566964656f4d657373616765480112250a06726563616c6c18122001" .
            "280b32132e636f72652e526563616c6c4d6573736167654801121f0a1774" .
            "72656174506f696e74657241735532506f696e7465721833200128084208" .
            "0a06746f526f6f6d42070a056d617962652a3a0a0f4d657373616765526f" .
            "6f6d5479706512140a104d657373616765526f6f6d47726f757010001211" .
            "0a0d4d657373616765526f6f6d553210012a740a0d4d6573736167655374" .
            "6174757312170a134d657373616765537461747573556e73656e74100012" .
            "180a144d65737361676553746174757353656e64696e67100112170a134d" .
            "6573736167655374617475734661696c6564100312170a134d6573736167" .
            "6553746174757353657276657210042a99020a0b4d657373616765547970" .
            "6512120a0e4d657373616765496e76616c6964100012110a0d4d65737361" .
            "67654e6f746963651001120f0a0b4d65737361676554657874100212100a" .
            "0c4d657373616765496d616765100312100a0c4d65737361676541756469" .
            "6f1004120e0a0a4d657373616765576562100512140a104d657373616765" .
            "5765624e6f74696365100612130a0f4d657373616765446f63756d656e74" .
            "100712100a0c4d657373616765566964656f100812110a0d4d6573736167" .
            "65526563616c6c1009121d0a194d6573736167654576656e74467269656e" .
            "6452657175657374101412160a124d6573736167654576656e7453746174" .
            "7573101512170a134d6573736167654576656e7453796e63456e64101642" .
            "580a13636f6d2e7a616c792e70726f746f2e636f72655a2f676974687562" .
            "2e636f6d2f6475636b636861742f6475636b636861742d67617465776179" .
            "2f70726f746f2f636f7265ca020f5a616c795c50726f746f5c436f726562" .
            "0670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
