function talksAbout(node, string)
{
	if(node.nodeType == Node.ELEMENT_NODE)
	{
		for(let i = 0; i < node.childNodes.length; i++)
		{
			if(talksAbout(node.hildNodes[i], string))
			{
				return true;
			}
		}
		return false;
	}
	else if(node.nodeType == Node.TEXT_NODE)
	{
		return node.nodeValue.indexOf(string) > -1;
	}
}

