#tag Class
Protected Class JSONFormatter
	#tag Method, Flags = &h21
		Private Sub AddCharToLine(c As Text)
		  CurrentLine = CurrentLine + c
		End Sub
	#tag EndMethod

	#tag Method, Flags = &h0
		Sub Constructor(t As Text)
		  JSONText = t
		  FormattedJSON = ""
		End Sub
	#tag EndMethod

	#tag Method, Flags = &h0
		Function Format() As Text
		  For Each c As Text In JSONText.Characters
		    Escaped = IsEscaped(c)
		    
		    If IsQuote(c) Then
		      Quoted = Not Quoted
		    End If
		    
		    If Not Quoted And IsOpenBracket(c) Then
		      WriteCurrentLine
		      AddCharToLine(c)
		      WriteCurrentLine
		      Indent
		    ElseIf Not Quoted And IsCloseBracket(c) Then
		      WriteCurrentLine
		      UnIndent
		      AddCharToLine(c)
		    ElseIf Not Quoted And IsComma(c) Then
		      AddCharToLine(c)
		      WriteCurrentLine
		    Else
		      AddCharToLine(c)
		    End If
		  Next
		  
		  WriteCurrentLine
		  
		  Return FormattedJSON
		End Function
	#tag EndMethod

	#tag Method, Flags = &h21
		Private Sub Indent()
		  IndentLevel = IndentLevel + 1
		End Sub
	#tag EndMethod

	#tag Method, Flags = &h21
		Private Function IsCloseBracket(c As Text) As Boolean
		  If c = "}" Or c = "]" Then
		    Return True
		  Else
		    Return False
		  End If
		End Function
	#tag EndMethod

	#tag Method, Flags = &h21
		Private Function IsComma(c As Text) As Boolean
		  If c = "," Then
		    Return True
		  Else
		    Return False
		  End If
		End Function
	#tag EndMethod

	#tag Method, Flags = &h21
		Private Function IsEscaped(c As Text) As Boolean
		  If Not Escaped Then
		    If c = "\" Then
		      Return True
		    Else
		      Return False
		    End If
		  Else
		    Return False
		  End If
		End Function
	#tag EndMethod

	#tag Method, Flags = &h0
		Function IsOpenBracket(c As Text) As Boolean
		  If c = "{" Or c = "[" Then
		    Return True
		  Else
		    Return False
		  End If
		End Function
	#tag EndMethod

	#tag Method, Flags = &h21
		Private Function IsQuote(c As Text) As Boolean
		  If c = """" And Not Escaped Then
		    Return True
		  Else
		    Return False
		  End If
		End Function
	#tag EndMethod

	#tag Method, Flags = &h21
		Private Function MoveNextChar() As Boolean
		  
		End Function
	#tag EndMethod

	#tag Method, Flags = &h21
		Private Sub UnIndent()
		  If IndentLevel > 0 Then IndentLevel = IndentLevel - 1
		End Sub
	#tag EndMethod

	#tag Method, Flags = &h21
		Private Sub WriteCurrentLine()
		  Dim indentation As Text
		  For i As Integer = 1 To IndentLevel
		    indentation = indentation + "    "
		  Next
		  
		  Dim line As Text = indentation + CurrentLine.Trim
		  If line.Length > 0 Then
		    FormattedJSON = FormattedJSON + line + EndOfLine.Unix.ToText
		  End If
		  
		  CurrentLine = ""
		End Sub
	#tag EndMethod


	#tag Note, Name = About
		This class is based on "Simple JSON .NET formatter" C# code from this web site:
		
		http://www.limilabs.com/blog/json-net-formatter
		
		
		
	#tag EndNote


	#tag Property, Flags = &h21
		Private CurrentLine As Text
	#tag EndProperty

	#tag Property, Flags = &h21
		Private Escaped As Boolean
	#tag EndProperty

	#tag Property, Flags = &h21
		Private FormattedJSON As Text
	#tag EndProperty

	#tag Property, Flags = &h21
		Private IndentLevel As Integer
	#tag EndProperty

	#tag Property, Flags = &h21
		Private JSONText As Text
	#tag EndProperty

	#tag Property, Flags = &h21
		Private Quoted As Boolean
	#tag EndProperty

	#tag Property, Flags = &h21
		Private Walker As Text
	#tag EndProperty


	#tag ViewBehavior
		#tag ViewProperty
			Name="Index"
			Visible=true
			Group="ID"
			InitialValue="-2147483648"
			Type="Integer"
		#tag EndViewProperty
		#tag ViewProperty
			Name="Left"
			Visible=true
			Group="Position"
			InitialValue="0"
			Type="Integer"
		#tag EndViewProperty
		#tag ViewProperty
			Name="Name"
			Visible=true
			Group="ID"
			Type="String"
		#tag EndViewProperty
		#tag ViewProperty
			Name="Super"
			Visible=true
			Group="ID"
			Type="String"
		#tag EndViewProperty
		#tag ViewProperty
			Name="Top"
			Visible=true
			Group="Position"
			InitialValue="0"
			Type="Integer"
		#tag EndViewProperty
	#tag EndViewBehavior
End Class
#tag EndClass
