#tag Class
Protected Class App
Inherits Application
	#tag Event
		Sub Open()
		  App.mDB = New MySQLCommunityServer
		  
		  App.mDB.Host = "127.0.0.1"
		  App.mDB.UserName = "root"
		  App.mDB.Password = "root"
		  App.mDB.DatabaseName = "pccms_registration"
		  
		  If App.mDB.Connect Then
		    mIsConnected = True
		    mDB.SQLExecute "SET NAMES 'utf8'"
		    // MsgBox("Connected to MySQL")
		  Else
		    mIsConnected = False
		    MsgBox("Error connecting to MySQL: " + App.mDB.ErrorMessage)
		  End If
		  
		End Sub
	#tag EndEvent


	#tag Property, Flags = &h0
		mDB As MySQLCommunityServer
	#tag EndProperty

	#tag Property, Flags = &h0
		mIsConnected As Boolean
	#tag EndProperty


	#tag Constant, Name = kEditClear, Type = String, Dynamic = False, Default = \"&Delete", Scope = Public
		#Tag Instance, Platform = Windows, Language = Default, Definition  = \"&Delete"
		#Tag Instance, Platform = Linux, Language = Default, Definition  = \"&Delete"
	#tag EndConstant

	#tag Constant, Name = kFileQuit, Type = String, Dynamic = False, Default = \"&Quit", Scope = Public
		#Tag Instance, Platform = Windows, Language = Default, Definition  = \"E&xit"
	#tag EndConstant

	#tag Constant, Name = kFileQuitShortcut, Type = String, Dynamic = False, Default = \"", Scope = Public
		#Tag Instance, Platform = Mac OS, Language = Default, Definition  = \"Cmd+Q"
		#Tag Instance, Platform = Linux, Language = Default, Definition  = \"Ctrl+Q"
	#tag EndConstant


	#tag ViewBehavior
		#tag ViewProperty
			Name="mIsConnected"
			Group="Behavior"
			Type="Boolean"
		#tag EndViewProperty
	#tag EndViewBehavior
End Class
#tag EndClass
