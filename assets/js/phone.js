
function jInsertEditorText( text, editor ) {

    if (isBrowserIE()) {
        if (window.parent.tinyMCE) {
            window.parent.tinyMCE.selectedInstance.selection.moveToBookmark(window.parent.global_ie_bookmark);
        }
    }
    tinyMCE.execCommand("mceInsertContent", false, html);
}
var global_ie_bookmark = false;

function IeCursorFix() {
    if (isBrowserIE()) {
        tinyMCE.execCommand('mceInsertContent', false, '');
        global_ie_bookmark = tinyMCE.activeEditor.selection.getBookmark(false);
    }
    return true;
}

function insertReadmore(text,editor) {
    jInsertEditorText(text,editor);
}
function insertDocument(text,editor) {

    var myRequest = new Request({
        url: '/?option=com_claims&controller=message&task=template',
        method: 'get',
        onSuccess: function(responseText){
            jInsertEditorText(responseText,editor);
        }
    });
    myRequest.send('doc=' + text);


}
function confirmdelete(url='') {
    if( confirm("Are you sure you want to delete?") ) window.location=url;
    else return false;
}
function confirmclose() {
    return confirm("Are you sure you want to close?");
}
//user to order columns
function tableOrdering( order, dir, task )
{
    var form = document.adminForm;

    form.filter_order.value = order;
    form.filter_order_Dir.value = dir;
    document.adminForm.submit( task );
}



//form validation
function validateZIP(field) {
    var valid = "0123456789-";
    var hyphencount = 0;

    if (field.length!=5 && field.length!=10) {
        alert("Please enter your 5 digit or 5 digit+4 zip code.");
        return false;
    }
    for (var i=0; i < field.length; i++)
    {
        temp = "" + field.substring(i, i+1);
        if (temp == "-") hyphencount++;
        if (valid.indexOf(temp) == "-1")
        {
            alert("Invalid characters in your zip code.  Please try again.");
            return false;
        }
        if ((hyphencount > 1) || ((field.length==10) && ""+field.charAt(5)!="-")) {
            alert("The hyphen character should be used with a properly formatted 5 digit+four zip code, like '12345-6789'.   Please try again.");
            return false;
        }
    }
    return true;
}
//telephone format
var zChar = new Array(' ', '(', ')', '-', '.');
var maxphonelength = 23;
var phonevalue1;
var phonevalue2;
var cursorposition;

function ParseForNumber1(object)
{
    phonevalue1 = ParseChar(object.value, zChar);
}

function ParseForNumber2(object)
{
    phonevalue2 = ParseChar(object.value, zChar);
}

function backspacerUP(object,e)
{

    if(e)
    {
        e = e;
    }
    else
    {
        e = window.event;
    }

    if(e.which)
    {
        var keycode = e.which;
    }
    else
    {
        var keycode = e.keyCode;
    }

    ParseForNumber1(object);

    if(keycode >= 48)
    {
        ValidatePhone(object);
    }

}

function backspacerDOWN(object,e)
{
    alert('aaaaaaaaaaaa');
    if(e)
    {
        e = e;
    }
    else
    {
        e = window.event;
    }

    if(e.which)
    {
        var keycode = e.which;
    }
    else
    {
        var keycode = e.keyCode;
    }

    ParseForNumber2(object);
}

function GetCursorPosition()
{

    var t1 = phonevalue1;
    var t2 = phonevalue2;
    var bool = false;
    for (i=0; i<t1.length; i++)
    {
        if (t1.substring(i,1) != t2.substring(i,1))
        {
            if(!bool)
            {
                cursorposition=i;
                bool=true;
            }
        }
    }
}

function ValidatePhone(object)
{

    var p = phonevalue1;

//p = p.replace(/[^\d*?x\d*]/gi,"");
    p = p.replace(/[^\d*]/gi,"");

    if (p.length < 3)
    {
        object.value=p;
    }
    else if(p.length==3)
    {
        pp=p;
        d4=p.indexOf('(');
        d5=p.indexOf(')');
        if(d4==-1)
        {
            pp="("+pp;
        }
        if(d5==-1)
        {
            pp=pp+")";
        }
        object.value = pp;
    }
    else if(p.length>3 && p.length < 7)
    {
        p ="(" + p;
        l30=p.length;
        p30=p.substring(0,4);
        p30=p30+")";

        p31=p.substring(4,l30);
        pp=p30+p31;

        object.value = pp;

    }
    else if(p.length >= 7)
    {
        p ="(" + p;
        l30=p.length;
        p30=p.substring(0,4);
        p30=p30+")";

        p31=p.substring(4,l30);
        pp=p30+p31;

        l40 = pp.length;
        p40 = pp.substring(0,8);
        p40 = p40 + "-";

// *JGK - Handle extensions. Add in the x
// after (nnn)nnn-nnnn to ensure extensions
// appear correctly (i.e. (nnn)nnn-nnnnxnnnnnn )
        if (l40>=13)
        {
            p41 = pp.substring(8,12);
            ppp = p40 + p41 + "x" + pp.substring(12,l40);
        }
        else
        {
            p41=pp.substring(8,l40);
            ppp=p40 + p41;
        }
        object.value = ppp.substring(0, maxphonelength);
    }

    GetCursorPosition();

    if(cursorposition >= 0)
    {
        if (cursorposition == 0)
        {
            cursorposition = 2;
        }
        else if (cursorposition <= 2)
        {
            cursorposition = cursorposition + 1;
        }
        else if (cursorposition <= 5)
        {
            cursorposition = cursorposition + 2;
        }
        else if (cursorposition == 6)
        {
            cursorposition = cursorposition + 2;
        }
        else if (cursorposition == 7)
        {
            cursorposition = cursorposition + 4;
            e1=object.value.indexOf(')');
            e2=object.value.indexOf('-');
            if (e1>-1 && e2>-1)
            {
                if (e2-e1 == 4)
                {
                    cursorposition = cursorposition - 1;
                }
            }
        }
        else if (cursorposition < 11)
        {
            cursorposition = cursorposition + 3;
        }
        else if (cursorposition == 11)
        {
            cursorposition = cursorposition + 1;
        }
        else if (cursorposition >= 12)
        {
            cursorposition = cursorposition+1;
        }

        var txtRange = object.createTextRange();
        txtRange.moveStart( "character", cursorposition);
        txtRange.moveEnd( "character", cursorposition - object.value.length);
        txtRange.select();
    }

}

function ParseChar(sStr, sChar)
{
    if (sChar.length == null)
    {
        zChar = new Array(sChar);
    }
    else
        zChar = sChar;

    for (i=0; i<zChar.length; i++)
    {
        sNewStr = "";

        var iStart = 0;
        var iEnd = sStr.indexOf(sChar[i]);

        while (iEnd != -1)
        {
            sNewStr += sStr.substring(iStart, iEnd);
            iStart = iEnd + 1;
            iEnd = sStr.indexOf(sChar[i], iStart);
        }
        sNewStr += sStr.substring(sStr.lastIndexOf(sChar[i]) + 1, sStr.length);

        sStr = sNewStr;
    }

    return sNewStr;
}
//telephone format